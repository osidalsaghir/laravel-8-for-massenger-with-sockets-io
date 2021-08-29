const socket = io('http://localhost:8080');

socket.on('message', text => {

    var node = document.createElement("p");
    var textnode = document.createTextNode(text); // Create a text node
    node.appendChild(textnode);
    document.getElementById("conversation").appendChild(node);
    var dx = document.getElementById("conversation").scrollHeight;
    document.getElementById("conversation").scrollTo(0, dx);

});

var input = document.getElementById("chatplace");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    addelement();
  }
});

function addelement() {

    const cookieValue = document.cookie
        .split('; ')
        .find(row => row.startsWith('userconversationname='))
        .split('=')[1];
    console.log(cookieValue);
    if (document.getElementById("chatplace").value == "") {
        return console.log("plz fill some");
    }

    var dx = document.getElementById("conversation").scrollHeight;
    document.getElementById("conversation").scrollTo(0, dx);

    var text = document.getElementById("chatplace").value;
    socket.emit('message', [cookieValue,text])

    document.getElementById("chatplace").value="";
    callAPI(text);

}


function callAPI(name){
    axios({
        method: 'post',
        url: 'http://127.0.0.1:8000/api/upload',
        data: {
          name: name,
        }
      }).then(function (response) {
          console.log(response);
      });
}