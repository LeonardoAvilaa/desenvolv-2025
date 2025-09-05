    function login() { 
        let user = document.getElementById("user").value;
        let senha = document.getElementById("senha").value;
        let senhaInput = document.getElementById("senha");
        let userInput = document.getElementById("user");
        if (user === "user" && senha === "pass") {
            userInput.classList.remove("user_pass_fail"); 
            senhaInput.classList.remove("user_pass_fail");
            alert("Login OK");
        }
        else {
            userInput.classList.add("user_pass_fail"); 
            senhaInput.classList.add("user_pass_fail"); 
        }
    };

    var entrar = document.getElementById("entrar");
    entrar.addEventListener("click", login);
    

