<DOCTYPE html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Roboto";
    font-size: 20px;
    background-size: 100% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100%
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: 20px;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 10px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    font-family:"Roboto";
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
}
.form__input:focus {
        background: #E9E9E9;
    }


.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-size:15px;
    font-family: "Roboto";
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: #DFB85A;
    transition: 0.3s;
}
    
.btn:hover {
        background:#E6D5AC;
    }

a{
  text-decoration:none;
  text-align:center;
}
.admin {
    margin-right:10px;
  text-align:right;
  font-size:12px;
  animation: arrive 500ms ease-in-out 0.7s forwards;
}


@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}

</style>
</head>
<body>

<div class="user">
    <header class="user__header">
        <img src="Kaweiee3.png" width="300px" height="300px" style="align-middle" margin-top="5px" margin-bottom= "50px" alt="" />
    </header>
    
    <p class="admin"><a href="login.php">Login</a></p>

    <form class="form">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" required>
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" required>
        </div>
        
        <div class="form__group">
            <input type="tel" placeholder="Phone Number" class="form__input" required>
        </div>

        <div class="form__group">
            <input type="text" placeholder="Student ID" class="form__input" required>
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" required>
        </div>
        
       <a href= "home.php" button class="btn" type="submit">Register</button></a>
        
    </form>
</div>
</body>

<script>
    const button = document.querySelector('.btn')
const form   = document.querySelector('.form')

button.addEventListener('click', function(loop) {
   form.classList.add('form--no') 
});
</script>
</html>