let ft_list;
let cookie = [];

$(document).ready(function() {
  $("#new").click(newTodo);
  $("#ft_list div").click(deleteTodo);
  ft_list = $("#ft_list");
  let tmp = document.cookie;
  if (tmp) {
    cookie = JSON.parse(tmp);
    cookie.forEach(function(e) {
      addTodo(e);
    });
  }
});

$(window).unload(function(){
  let todo = ft_list.children();
  let newCookie = [];
  for (let i = 0; i < todo.length; i++) newCookie.unshift(todo[i].innerHTML);
  document.cookie = JSON.stringify(newCookie);
});

function newTodo() {
  let todo = prompt("Please enter a new TO DO", "");
  if (todo) {
    addTodo(todo);
  }
}

function addTodo(todo) {
  ft_list.prepend($("<div>" + todo + "</div>").click(deleteTodo));
}

function deleteTodo() {
  if (confirm("Do you want to delete the TO DO?")) {
    this.remove();
  }
}
