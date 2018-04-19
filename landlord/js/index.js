(function(){
  var animating = false;
  var selectedCard = null;
  var mouse_x = 0;
  var mouse_y = 0;
  var ele_x = 0;
  var ele_y = 0;
  var cardOffsetLeft = 0;
   console.log('test');
   console.log(data[0][3]);

   // INITIATE DATA
   function init_data () {
     var card = document.body.querySelector('.current'); // SEARCH THE BODY OF THE DOCUMENT, FIND THE ELEMENT WITH CLASS CURRENT
     var parent = card.parentNode; //  INSTANTIATE VARIABLE PARENT AND PARENT NODE OF CARD
     parent.querySelector('.current').remove(); //     REMOVE THE CURRENT CLASS FROM THE CARD PARENT
     card.classList.remove('current'); //     REMOVE THE CURRENT CLASS FROM THE CARD
     for(var i = 0; i < data.length; i++) { //     TAKE JS DATA ARRAY (FROM SWIPING .PHP) AND CHECK LOOP THROUGH ARRAY
       var clone = card.cloneNode(true); //       CREATE CLONE (A CARD IN THE LIST)
       clone.id = "card_" + data[i][0]; //       SET CLONE ID = CARD_ARRAY ID (SHOULD BE LANDLORD ID)
       clone.querySelector('img').src = 'landlord/PHPMySqlFileUpload/Upload/'+data[i][3]; //       SET THE CLONE IMG TO BE THE DATA IMAGE
       clone.querySelector('.name').innerHTML = data[i][1]; //       SET THE CLONE NAME TO BE THE LANDLORD ID (WILL BE DISPLAYED)
       if(i == 0) {
         clone.classList.add('current'); //       ADD THE CURRENT CLASS TO THE CLONE (WHICH WILL BE THE NEW CURRENT CARD) AND WILL BE DISPLAYED AT THE FRONT OF THE DECK
       }
        parent.appendChild(clone); //       APPEND THE LIST OF CARDS WITH THE NEW CLONE

     }
   }

  function myFunction() {
      document.getElementById("animatecard").style.color = "red";
  }

  function animatecard(ev) { //adding the badges whether its liked or noped
    if (animating === false) {
      var t = ev.currentTarget;
      if (t.id === 'btnNope') {
        t.parentNode.parentNode.querySelector('.current').classList.add('nopeSelected');
        t.parentNode.parentNode.querySelector('.current').classList.add('addNopeTag');
        animating = true;
      }
      if (t.id === 'btnLike') {
        t.parentNode.parentNode.querySelector('.current').classList.add('likeSelected');
        t.parentNode.parentNode.querySelector('.current').classList.add('addLikeTag');
        animating = true;
      }
    }
  }

  function dragStarted(ele) { //checking pos of selected card
    selectedCard = ele;
    cardOffsetLeft = selectedCard.offsetLeft;
    ele_x = mouse_x - selectedCard.offsetLeft;
    ele_y = mouse_y - selectedCard.offsetTop;
  }

  function mouseMoved(ele) {//checking where the mouse is moving card
    mouse_x = document.all ? window.event.clientX : ele.pageX;
    mouse_y = document.all ? window.event.clientY : ele.pageY;
    moveCard(); //calling movecard
  }

  function moveCard() { //moving card qhere the mouse moves
    if (selectedCard !== null) {
        selectedCard.style.left = (mouse_x - ele_x - cardOffsetLeft) + 'px';
        selectedCard.style.top = (mouse_y - ele_y) + 'px';
        var currentCardOffsetLeft = selectedCard.offsetLeft;
        if(currentCardOffsetLeft > cardOffsetLeft) {
          selectedCard.style.transform = "rotate(10deg)";
          selectedCard.classList.remove('addNopeTag');//when it goes past a certain point it will change tags
          selectedCard.classList.add('addLikeTag');
        }
        else {
          selectedCard.style.transform = "rotate(-10deg)";
          selectedCard.classList.remove('addLikeTag');
          selectedCard.classList.add('addNopeTag');
        }
    }
  }

  function stopCard() { //stops div/card disappearing off screen
    if (selectedCard !== null) {
      var currentCardOffsetLeft = selectedCard.offsetLeft;
      if(currentCardOffsetLeft > cardOffsetLeft) {
        selectedCard.classList.add('likeSelected');
      }
      else {
        selectedCard.classList.add('nopeSelected');
      }
      selectedCard = null;
    }
  }

  function animationdone(ev) {//when we fin moving card, what next
    //changes next card to be current OR if you swipe right, show the landlord profile, else carry on to next card
    animating = false;
    var parent = ev.target.parentNode;
    var target = ev.target;
    if (ev.animationName === 'likeAnimate') {
      target.classList.remove('likeSelected');
      target.classList.remove('addLikeTag');
    }
    if (ev.animationName === 'nopeAnimate') {
      target.classList.remove('nopeSelected');
      target.classList.remove('addNopeTag');
    }//update card to be next card in list - moving it into correct pos
    parent.querySelector('.current').remove();
    parent.querySelector('.card').classList.add('current');
    target.classList.remove('current');
    target.style.top = 0;
    target.style.left = 0;
    target.style.transform = "rotate(0deg)";
    var clone = target.cloneNode(true);
    parent.appendChild(clone);
    updateMouseDown();
    var id = target.id.split('_')[1]; //swipe right
    if (ev.animationName === 'likeAnimate') {
      window.location.href = "tenant-view-landlord.php?landlord=" + id; //takes you to tenant view landlords page
    }
    // if (ev.animationName === 'nopeAnimate') {
      // window.location.href = "disliked.php?id=" + id;
    // }
  }

  function getContainer(ele) {
    var origin = ele;
    while (!origin.classList.contains('card')){
      origin = origin.parentNode;
    }
    return origin;
  }

  function dragStartedByTouch (ev) {
    mouse_x = ev.touches[0].pageX;
    mouse_y = ev.touches[0].pageY;
    selectedCard = getContainer(ev.target);
    cardOffsetLeft = selectedCard.offsetLeft;
    ele_x = mouse_x - selectedCard.offsetLeft;
    ele_y = mouse_y - selectedCard.offsetTop;//animate cards
  }

  function touchMoved(ev) {
    mouse_x = ev.touches[0].pageX;
    mouse_y = ev.touches[0].pageY;
    moveCard();
  }

  function userAgentDetect() {
    if(window.navigator.userAgent.match(/Mobile/i)
    || window.navigator.userAgent.match(/iPhone/i)
    || window.navigator.userAgent.match(/iPod/i)
    || window.navigator.userAgent.match(/IEMobile/i)
    || window.navigator.userAgent.match(/Windows Phone/i)
    || window.navigator.userAgent.match(/Android/i)
    || window.navigator.userAgent.match(/BlackBerry/i)
    || window.navigator.userAgent.match(/webOS/i)
    || window.navigator.userAgent.match(/Tablet/i)
    || window.navigator.userAgent.match(/iPad/i)
    || window.navigator.userAgent.match(/Nexus 7/i)
    || window.navigator.userAgent.match(/Nexus 10/i)
    || window.navigator.userAgent.match(/KFAPWI/i)) {
      return true;
    }
    return false;
  }
//this fn mirrors click func for websites to mobile/touch enabled devices
  function updateMouseDown() {
    if(userAgentDetect()) {
      document.getElementsByClassName('current')[0].addEventListener('touchstart', dragStartedByTouch);
      document.addEventListener('touchmove', touchMoved);
      document.addEventListener('touchend', stopCard);
    }
    else {
      document.getElementsByClassName('current')[0].onmousedown = function () {
        dragStarted(this);
        return false;
      };
      document.onmousemove = mouseMoved;
      document.onmouseup = stopCard;
    }
  }

  document.body.addEventListener('animationend', animationdone);
  document.body.addEventListener('webkitAnimationEnd', animationdone);
  document.getElementById('btnNope').addEventListener('click', animatecard);
  document.getElementById('btnLike').addEventListener('click', animatecard);
  init_data();
  updateMouseDown();
})();
