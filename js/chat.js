const form        = document.querySelector('.typing-area'),
      sendBtn     = form.querySelector('button'),
      inputField  = form.querySelector('.input-field'),
      chatBox     = document.querySelector('.chat-box');

form.onsubmit = (e)=>{
    e.preventDefault();
}
// send btn message to php with ajax
sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST",'php/insert_chat.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status ==200){
            inputField.value = "";
            scrollToBottom()
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}
chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

//check every  1 second
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST",'php/get_chat.php',true);
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status ==200){
            let data = xhr.response; // get all users by ajax
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains('active')){
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
},500)

//function to scroll
function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}
