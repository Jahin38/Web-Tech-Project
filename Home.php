<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sole Mates Website</title>
    <link rel ="stylesheet" type="text/css" href="Assets/css/style.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js"></script>
</head>
<body>
    <div class="nav">
        <div class="logo">Sole<span class="mates">Mate</span></div>
        <a href="#">Home</a>
        <a href="#">Men</a>
        <a href="#">Women</a>
        <a href="#">Children</a>
        <a href="#">Accessories</a>
        <div class="nav-icons">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="Views/index.php"><i class="fa-solid fa-user"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>

    <div class="content">
        <div class="Homebox1">
            <h1>OUR POPULAR PRODUCT</h1>
            <p>Lorem ipsum is simply dummy lorem ipsum</p>
            <p>Lorem ipsum is simply dummy lorem ipsum</p>
            <div class="rec1">
                <a href="Views/details.php"><img src="Assets/Images/orange.png" alt="Shoe 1">
                    <p class="bold">Nike Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label">50% discount</div>
            </div>
            <div class="rec2">
                <a href="Views/details.php"><img src="Assets/Images/black.png" alt="Shoe 2">
                    <p>Bata Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label1">50% discount</div>
            </div>
            <div class="rec3">
                <a href="Views/details.php"><img src="Assets/Images/blue.png" alt="Shoe 3">
                    <p>Boot Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label2">50% discount</div>
            </div>
            <div class="rec4">
                <a href="Views/details.php"><img src="Assets/Images/orange.png" alt="Shoe 4">
                    <p>Sneaker Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label3">50% discount</div>
            </div>
            <div class="rec5">
                <a href="Views/details.php"><img src="Assets/Images/orange.png" alt="Shoe 5">
                    <p>Srut Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label4">50% discount</div>
            </div>
            <div class="rec6">
                <a href="Views/details.php"><img src="Assets/Images/black.png" alt="Shoe 6">
                    <p>Solina Shoes</p>
                    <p>Leather shoes for men</p>
                    <p>2,190 BDT | 50% discount</p>
                </a>
                <div class="discount-label5">50% discount</div>
            </div>
            <form action="Views/browse.php" method="get">
                <input type="submit" value="SHOW MORE">
            </form>
        </div>

        <div class="Homebox">
            <div class="image-container image-container-clickable">
                <img src="Assets/Images/blue.png" alt="image 4" height="650px" width="650px">
                <div class="image-container2">
                    <img src="Assets/Images/orange.png" alt="image 5" height="200px" width="200px">
                </div>
                <div class="image-container3">
                    <img src="Assets/Images/black.png" alt="image 6" height="200px" width="200px">    
                </div>
            </div>
            <div class="circle"></div>
            <div class="Textanime">
                <h1><span class="sole">SOLE</span> <span class="mates">MATES</span></h1>
                <h2>WEBSITE</h2>
                <p>VERSATILE SHOES WITH A SPRINGY FEEL,</p>
                <p>MADE IN PART WITH RECYCLED MATERIALS</p>
                <p>Go for that walk around the neighborhood or head to</p>
                <p>the gym in a pair of adidas for that walk around the neighborhood </p>
                <p> or head to the gym in a pair of sole mates</p><br>
                <button id="scrollBtn" onclick="scrollToContent()">SHOP NOW</button><br><br><br>
                <div class="image-container1">
                    <img src="Assets/Images/orange.png" alt="Image 1" height="140px" width="140px">
                    <img src="Assets/Images/blue.png" alt="Image 2" height="140px" width="140px">
                    <img src="Assets/Images/black.png" alt="Image 3" height="140px" width="140px">
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container10">
            <div class="row">
                <div class="footer-col">
                    <h4>Service</h4>
                    <ul>
                        <li><a href="#">Men's Shoes</a></li>
                        <li><a href="#">Women's Shoes</a></li>
                        <li><a href="#">Kid's Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Guide</a></li>
                        <li><a href="Views/faq.php">FAQ's</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Partner</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Claim</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function scrollToContent() {
            window.scrollBy({ 
                top: 500, // Adjust the scroll distance as needed
                behavior: 'smooth' // Optional: Add smooth scrolling
            });
        }
    </script>

<!--spining animation javascript-->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.image-container-clickable img');

        images.forEach(function (image) {
            image.addEventListener('click', function () {
                const clickedImage = this;

                // Remove the spinning animation from all images
                images.forEach(function (img) {
                    img.classList.remove('spin-animation');
                });

                // Add spinning animation to the clicked image
                clickedImage.classList.add('spin-animation');
                setTimeout(function () {
                    clickedImage.classList.remove('spin-animation');
                }, 1000); // Adjust the duration of the animation as needed
            });
        });
    });
</script>


</body>
</html>