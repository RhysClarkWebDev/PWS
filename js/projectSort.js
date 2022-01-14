


/*
var testElements = document.getElementsByClassName('test');
var testDivs = Array.prototype.filter.call(testElements, function(testElement){
  return testElement.nodeName === 'DIV';
});*/





function update() {



  let inProgress = document.getElementsByClassName('inProgress');
  for(var i=0; i< inProgress.length; i++){
    inProgress[i].classList.remove("show");
    inProgress[i].classList.remove("hide");
  }

  let completed = document.getElementsByClassName('completed');
  for(var i=0; i< completed.length; i++){
    completed[i].classList.remove("show");
    completed[i].classList.remove("hide");
  }

  var select = document.getElementById('projectSortSelect');
	var option = select.options[select.selectedIndex];
  var y = option.value;







  if (y == "allOption") {

    for(var i=0; i< inProgress.length; i++){
      inProgress[i].classList.add("show");
    }

    for(var i=0; i< completed.length; i++){
      completed[i].classList.add("show");
    }

  }





  else if (y == "inProgressOption") {

    for(var i=0; i< inProgress.length; i++){
      inProgress[i].classList.add("show");
    }

    for(var i=0; i< completed.length; i++){
      completed[i].classList.add("hide");
    }

  }





  else if (y == "completedOption") {

    for(var i=0; i< inProgress.length; i++){
      inProgress[i].classList.add("hide");
    }

    for(var i=0; i< completed.length; i++){
      completed[i].classList.add("show");
    }

  }



};
