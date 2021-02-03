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
    font-size: 30px;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #EFC1BA 10%, #BADBCA 90%);
    height: 100vh
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: 30px;
    margin-bottom: 10px;
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
    padding: 15px;
    font-family: "Roboto";
    font-size: 15px;
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

.forgot {
  text-align:right;
  font-size:12px;
  transition: 0.3s;
  animation: arrive 500ms ease-in-out 0.9s forwards;
}


a{
  text-decoration:none;
  text-align:center;
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
        <img src="Kaweiee3.png" width="300px" height="300px" margin-top="10px" margin-bottom= "50px" alt="" />
    </header>

    <p class="forgot"><a href="login.php">&#8606; Back to Login</a></p>

    <form class="form">

        <div class="form__group">
            <input type="tel" placeholder="Admin ID" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" />
        </div>
        
        <a href="home.php" button class="btn" type="button">Enter</button></a>

    </form>
</div>
</body>

<script>
    const button = document.querySelector('.btn')
const form   = document.querySelector('.form')

button.addEventListener('click', function() {
   form.classList.add('form--no') 
});
</script>
</html>