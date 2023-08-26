<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;0,900;1,800&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">

    <title>Edusakha</title>
</head>
    <body style="background: linear-gradient(165deg, #000 0%, #232323 100%);">
        <section>
          <div class="container is-paddingless is-marginless">
            <div class="columns  is-marginless">
                <div class="column is-marginless is-paddingless">
                      <img src="./assets/images/singup.png" alt="" srcset="" class="signupimg" style="box-shadow: 7px 0px 25px 7px #fe592c;">
                </div>
                <div class="column is-flex-direction-column is-justify-content-center is-align-items-center">
                    <h1 class="has-text-centered is-size-4 is-block" style="font-weight: bold; color: #FFFFFF;margin-top: 2vh;margin-bottom: 2vh;">Sign Up to Edusakha</h1>
                    <div class="box cards is-centered">
                        <div class="field">
                            <label class="label has-text-white">Name</label>
                            <div class="control">
                              <input class="input" type="text" placeholder="Enter your name">
                            </div>
                          </div>
                    
                          <div class="field">
                            <label class="label has-text-white">Username</label>
                            <div class="control has-icons-left has-icons-right">
                              <input class="input is-success" type="text" placeholder="Enter your username" value="bulma">
                              <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                              </span>
                              <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                              </span>
                            </div>
                            <p class="help is-success">This username is available</p>
                          </div>
                    
                          <div class="field">
                            <label class="label has-text-white">Email</label>
                            <div class="control has-icons-left has-icons-right">
                              <input class="input is-danger" type="email" placeholder="Enter your email">
                              <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                              </span>
                              <span class="icon is-small is-right">
                                <i class="fas fa-exclamation-triangle"></i>
                              </span>
                            </div>
                            <p class="help is-danger">This email is invalid</p>
                          </div>
                
                          <div class="field">
                            <div class="control">
                              <label class="checkbox has-text-white">
                                <input type="checkbox">
                                I agree to the <a href="#" class="has-text-grey-\s">terms and conditions</a>
                              </label>
                            </div>
                          </div>
                    
                          <div class="field is-grouped">
                            <div class="control">
                              <button class="button is-link">Submit</button>
                            </div>
                            <div class="control">
                              <button class="button is-link is-light">Cancel</button>
                            </div>
                          </div>
                    </div>
                </div>
          </div>
        </section>
    
    
</body>
</html>