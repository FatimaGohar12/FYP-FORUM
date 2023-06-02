<?php
// <!-- Sign-Up-mODAL -->

// <!-- Modal -->
echo '

<div class="modal fade" id="sign-upModal" tabindex="-1" aria-labelledby="sign-upModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create an iDiscuss Account</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./navbar/_signuphandel.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="signupemail" name="signupemail"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" pattern="([A-Za-z0-9]{1,50}@gmail.com)" class="form-control" id="signupemail" name="signupemail"
                        aria-describedby="emailHelp">
                   
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Location</label>
                <input type="text" class="form-control" id="signupemail" name="signupemail"
                    aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="text" class="form-control" id="signupemail" name="signupemail"
                aria-describedby="emailHelp">
            
        </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword">
                        
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-success">Create Account</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
';
?>
