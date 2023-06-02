<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Posts</title>
</head>
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .card {
        flex-basis: calc(33.33% - 20px);
        margin: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        padding: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    body {
        background-color: #eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }

    .height {
        height: 100vh;
    }

    .search {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1);
    }

    .search input {
        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;
    }

    .search input:focus {
        box-shadow: none;
        border: 2px solid blue;
    }

    .search .fa-search {
        position: absolute;
        top: 20px;
        left: 16px;
    }

    .search button {
        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue;
    }

    .card {
        box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        transition: all 0.5s ease-in-out;
    }

    .card:hover {
        cursor: pointer;
        background-color: RGBA(47, 0, 80, 0.06);
        transform: scale(0.9);
    }
</style>

<body>
    <?php
    // Database connection include
    include '../Partials/_Db-connect.php';
    // Header include
    require '../navbar/_header.php';
    ?>

    <div class="container my-3">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" id="searchInput" class="form-control rounded-pill"
                        placeholder="Search Post here...">
                    <button id="searchButton" class="btn btn-primary btn-sm rounded-pill">Search</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss-Posts</h2>
        <div class="row my-4">
            <?php
            $sql = "SELECT * FROM `posts`";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['post_id'];
                $postTitle = $row['post_title'];
                $postContent = $row['post_content'];

                echo '
                <div class="card post-card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./threadlist.php?id=' . $id . '"> ' . $postTitle . '</a></h5>
                        <p class="card-text">' . substr($postContent, 0, 30) . '</p>
                        <a href="./postreccord.php?id=' . $id . ' " class="btn btn-success btn-sm">View Posts</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>

    <div id="noResultsMessage" style="display: none; text-align: center;">
        <p>No results found</p>
    </div>

    <footer class="pt-3 mt-4 text-muted border-top text-center">
        © 2022
    </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var searchInput = document.getElementById('searchInput');
            var searchButton = document.getElementById('searchButton');
            var noResultsMessage = document.getElementById('noResultsMessage');

            searchButton.addEventListener('click', function() {
                var searchValue = searchInput.value.toLowerCase().trim();
                var postCards = document.getElementsByClassName('post-card');
                var hasResults = false;

                for (var i = 0; i < postCards.length; i++) {
                    var card = postCards[i];
                    var cardText = card.querySelector('.card-text').textContent.toLowerCase();

                    if (searchValue === '') {
                        card.style.display = 'block';
                        hasResults = true;
                    } else if (cardText.includes(searchValue)) {
                        card.style.display = 'block';
                        hasResults = true;
                    } else {
                        card.style.display = 'none';
                    }
                }

                if (hasResults) {
                    noResultsMessage.style.display = 'none';
                } else {
                    noResultsMessage.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>
