<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
	<style>
	/* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7f7f7;
}

/* Header Styles */
header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: 0 auto;
}

.logo h1 {
    font-size: 24px;
    letter-spacing: 2px;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

nav ul li a:hover {
    text-decoration: underline;
}

/* Main Content - Product Showcase */
main {
    padding: 40px 0;
}

.product-showcase h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 30px;
    color: #333;
}

.product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 30px;
    padding: 0 20px;
}

.product-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.product-card h3 {
    font-size: 20px;
    color: #333;
    margin: 15px 0;
}

.product-card p {
    font-size: 18px;
    color: #555;
}

.product-card button {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    width: 100%;
    cursor: pointer;
    font-size: 16px;
}

.product-card button:hover {
    background-color: #0056b3;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 30px 0;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: 0 auto;
}

.footer-logo h1 {
    font-size: 24px;
    letter-spacing: 2px;
}

.footer-links, .footer-social {
    list-style: none;
}

.footer-links ul, .footer-social ul {
    display: flex;
    gap: 20px;
}

.footer-links ul li, .footer-social ul li {
    display: inline;
}

.footer-links ul li a, .footer-social ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.footer-links ul li a:hover, .footer-social ul li a:hover {
    text-decoration: underline;
}
/* Home Content Section */
.home-content {
  background-color: #f8f8f8;
  padding: 80px 20px;
  text-align: center;
}

.home-content h2 {
  font-size: 40px;
  margin-bottom: 20px;
}

.home-content p {
  font-size: 20px;
  margin-bottom: 30px;
}

.cta-button {
  background-color: #f0a500;
  padding: 15px 30px;
  font-size: 18px;
  color: #fff;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.cta-button:hover {
  background-color: #e08b00;
}
/* About Section Styling */
.about {
  padding: 50px 10%;
  background-color: #fff;
  text-align: center;
}

.about h1 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #333;
}

.about-container {
  max-width: 1200px;
  margin: 0 auto;
}

.about-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.about-text {
  flex: 1;
  max-width: 500px;
}

.about-text p {
  font-size: 1.1em;
  margin-bottom: 15px;
}

.about-image {
  flex: 1;
  max-width: 500px;
  text-align: center;
}

.about-image img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Responsive Styling */
@media (max-width: 768px) {
  .about-content {
    flex-direction: column;
    text-align: left;
  }

  .about-text,
  .about-image {
    max-width: 100%;
  }
}
/* Main Content */
.main-content {
    padding: 60px 20px;
    text-align: center;
}

.product-list {
    margin-top: 30px;
}

.product-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 40px; /* space between product cards */
    justify-items: center; /* center-align product cards within grid cells */
    margin: 0 auto; /* to center the grid container */
}

.product-card {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.5));
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    max-width: 350px;
    position: relative;
    background-color: #fff;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.product-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 15px 15px 0 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .product-image {
    opacity: 0.8;
}

.product-details {
    padding: 20px;
    background-color: #fff;
    border-radius: 0 0 15px 15px;
}

.product-title {
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
    font-weight: 600;
    text-transform: capitalize;
    transition: color 0.3s ease;
}

.product-title:hover {
    color: #e74c3c; /* Product title hover color */
}

.product-category,
.product-price {
    font-size: 16px;
    color: #666;
    margin-bottom: 8px;
}

.add-to-cart-button {
    background-color: #e74c3c;
    color: white;
    padding: 14px 28px;
    border-radius: 30px;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    transition: background-color 0.3s ease, transform 0.3s ease;
    margin-top: 15px;
}

.add-to-cart-button:hover {
    background-color: #c0392b;
    transform: scale(1.05);
}

.add-to-cart-button:active {
    transform: scale(1.02);
}


</style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>Trendy cart</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home-content">Home</a></li>
                    <li><a href="#product-showcase">Shop</a></li>
                    <li><a href="#about">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
	  <section id="home-content" class="home-content">
        <h2>Welcome to ShopEase!</h2>
        <p>Your one-stop shop for all things you need. Explore our wide range of products and enjoy unbeatable deals!</p>
       
    </section>
	<section class="about">
    <div class="about-container">
      <h1>About Us</h1>
      <div class="about-content">
        <div class="about-text">
          <p>We are a passionate team committed to delivering the best products and services to our customers. Our company was founded on the principles of quality, integrity, and customer satisfaction. We strive to innovate and provide a seamless shopping experience for everyone.</p>
          <p>Our mission is to enhance the lives of our customers through our carefully curated products and outstanding customer service. We are dedicated to making your experience with us exceptional in every way.</p>
        </div>
        <div class="about-image">
          <img src="data:image/jpeg;base64,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" alt="About Us Image">
        </div>
      </div>
    </div>
  </section>


    <!-- Main Content (Product Showcase) -->
    <form action="new 1.php" method="post">
    <main class="main-content">
        <section class="movie-list">
            <div class="movie-container">
                <!-- shop 1 -->
                <div class="product-card">
    <div class="product-details">
        <h2 class="product-title"> Headphones</h2>
        <p class="product-category"><strong>Category:</strong> Electronics</p>
        <p class="product-price"><strong>Price:</strong> $129.99</p>
        <p class="product-description">High-quality wireless headphones with noise cancellation and up to 20 hours of battery life.</p>
        <img src="data:image/webp;base64,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" alt="Wireless Headphones">
         <a href="end.php">Buy now</a>
    </div>
</div><br>


                <!-- Movie 2 -->
                <div class="product-card">
    <div class="product-details">
        <h2 class="product-title">phone</h2>
        <p class="product-category"><strong>Category:</strong> Electronics</p>
        <p class="product-price"><strong>Price:</strong> $166.99</p>
        <p class="product-description">High-quality phones with noise cancellation and up to 20 hours of battery life.</p>
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBIODxIPFRAQEhAQDw8PEhAPEBAQFRUWFhURFRcYHSgiGBolHhMWITEhJSkrLi4uFx8zODMsNyk5Li0BCgoKDg0OGxAQGi0lHiUvKy0tLy0tLS0tLS0tLS0tKy8tLS0tLS0tLS0tLS0tLS0tLS0tLS8tLS0tLy0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAgYDBAUHAQj/xABOEAACAQICBAcIDQoFBQAAAAAAAQIDEQQSBQYhMRMiQVFhc7EHI3FygZGysxQXJDJCUlOTobTB0tMlMzRVYoKDksLRFmOiw/AmNTZDo//EABoBAQACAwEAAAAAAAAAAAAAAAABBQIDBAb/xAA6EQEAAQMBBAYHBwMFAQAAAAAAAQIDEQQSITFBBTJRcYGxEyIzYZHB8BQjQlJyoeEGstEkJTQ18YL/2gAMAwEAAhEDEQA/APcQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGLEV1BXs227RirXlLmXmb8CYRM4Yc9Xl4OPRaVT6brsGYa5qqh84Spzw/kl94jahj6Sr6j+TPU54fNy+8NqE7dX1H8mepzw+bl98ZhG3V9R/L5wtTnj83L74zB6Srs/b+XzhqnPD5uX3hn3I9JV9Qo2sndRhhsQ8JSp+yK0dko01NJTW+Ky5nJrc7LeZRGWcVVYzO6HPXdSxv6rxHzOM/DMvR1dkp24/NH14pLuoY39VYr5jGfhkbE9kpic8Jj68UX3Ucf+qcTbn4LGL/aGxV2JmccZ+vij7aeO/VOI+bxf4RPo6uyWv0tH54+vFKHdTxvLorErwUsW/wDaHo6uyT0tH5o+vFk9s7G/qnF/M4z8IjYnsZ7W7OYRqd1PGQWaporExgtspSp4uKS57ulYbM9htRymFz1L1ww+kqTqUHacLKrSk7yhfdLpi7Oz6DFlGeaxBIAAAAAAAAAAAAADTrPv0f2YNr957fQXnZjVwa6usp+u2uEMFTSjGFTE1IucYVG8kIZsqk0t9+RLfZ7RTTlERlXNW+6NOUn7NWGUVZyyUp0pRp/CnFuTUrb3HY7J2vaxnNEJmHqWSPMvMjW15KTtLKtzTaXM01ftXmDOmWVgamk6zhRq1Fvp0qk14YxbXYTHFjLw7Rej6jw9eph5ZcRWlKPCttSapyUMuZbVfJLbzzbLnS2s6aZp60/JU6y5P22NuM0U43d8cfrsWrVeVanh4U8VNzqJyvJydRqN+KnJ7ZPp8l3a5nRRVTRiqd6a71FVeaI3LDRqp7ma6nXanLK5mvMOjNT4pxe9GeZjg01Rbq61KTw6e5mUXJ5tdWhpnfROGSjTlHZvixVVElu3ctbpjMNqCt9hqnemqjZ7lP0ZhY4bWKKoxUY4ukp1Ix2RzzhiXN2XO8LTl4bvlOK7TEVbnXZqmaYy9VNTeAAAAAAAAAAAAAA0a357+Gu2RFXBqq60PKe6tqtUrTp4+m3aFCNOWxyhCVOc5xzW2xjJVJLNuTir7yaeCYmM4UHV7QtfSFTgYRsrOMpq0lFO0buUUoqKSvbzGee0nFMP0fC0YxjfclFX2XsrfYa2iakqMuOvFn2wIlnRO5sNkMsufpx+5cR1Fb0JExxY5ULUrDJ4NSa/92L+ivURYWLkxbiI96blimqdqXZnglyI3bU83JXYp5Iwwkl0E7u1hTarjhDNGlLlMdmntb4m7HJGpQb3b+bl8zM6YhrqudsMNOrKMrcvM9j8xnVROMps6inOM+Dq4avfec7umJqjMNtEOerfGJVOsv8AqHB9RT9DSJy3uszsxinxemml0AAAAAAAAAAAAAANCu+//wAP7ZETwaa+tDUq46nRo8LWqQp04rjTnJRivK+UiIYb5nc5+i9Y8HXbhhq1OUnd5UpU3LncVJLN5LmWJYVUzSoPdF0Bjq+NVWjTnVpOnTjRcakYrDzV8102st21LMr83IjKGVFymI3y9J0TmjClGpLNUjSy1J/GmlTzS8ruY1Qwt1Rvb+cxwzy0dNT9zYjqK3oSMoRE71L1IqpYKOy74bF/WKh36aiaqGjWaum1Vszvl3o12zp9FEKuekK6vc2KUUzXVGHXZv7XNm9j8xry7YqmOD5OkmrSRETMcG7bpqjFcOXpHD2XG40eR8q8D5Gddi5mfeqtbo8RtUtGhpJ05KNTjQfvZ/CX9+3w7jfc00XIzTulp0vSFyzVs174+vrHwzwd/D4lO21NNXjJbmiumJicTxeh2abtHpLfBXa3/kOD6in6GkTlu9ZhRw8XphpbQAAAAAAAAAAAAAHOxL7+uqf9QaLnXh4z3ZNIVlWo0Vf2OsPTne10pzqTjOXhShTXRm6TKGVvepWD0vVotrDTk2454xVpOM42cJpcklJKz8HPYlljtfoSdbY8zySy5ox5HKz4u7bt2WRE5iYxDipptztbU47GTC1NqfRP+gmqGNmr1W1whjhty09Lz9z1+prehInCInerGodC+BT/AM7GfWKp2aavFGGjW2Nuuau51akbM7qZyoblMxKeHlt3kVwzsTieLowrK285ppWtF6McWWE0zCYmHTRdipGrRTTT2xlsaETzji30z+GrhKm6wYOVPNHm2p86e5/85UXOkuRXiXn+kLE28x2b4+vf5w1dBaWyy4Go7Rlub+BL43g5/Pz3y1ml2o26eP19R8G7ovpL0FfrdWeP+f8APx79jDVG9YMKpb40qa/+ekDzuo63g9PdoimrdwnfD1U52IAAAAAAAAAAAAADmYx9/XVS/qMo4Oa914VvTWiKOKpKFZSTipRjUhlU434s47U04vKrppp2T3pMmHP6WbdSv6v6iYXCVOFUqlSd04qahGEWndPLFbWnuu7dBlEIr1czGIhZZ1DKIccyyUJ7vBJ+R5bei/MY1cXRY6rY4Qxw25a2lJ+563U1fQZOCmd8OLqFO2jo9NfG/Wap0aaM0stZXFOW5iapZUUvL6i7iZmXynhpzpSqxaWWVssuLeKV3NN83YnzCq5TTXFMsaNPduWZuUzjE8J3ZjGZnwR9iT4rVRO8Izdtyu2ltezkHpqd+Yxvwx+yXd2zXnMRO73558P8p0sROElFqV3eyas7K6fmyvzMiqmiqMxLZbv3rVcUzE5n5Zz8MS72DqOSSae2ys96b2pNchwXIimd0vRaa7NdO+GlrBgs1K7W2Dyy8SWz6Hb6TdpLuzXu5+cGttbdvfy8peZY2DhJrli9nkPS01RVDytOaapieTp6sYvhdM4OT98qVODfPalj7eW2zyHmOlLXo7+I5xl63o29VcsRFX4Zx4PZitWQAAAAAAAAAAAAADmYp+6YdVLtZnTwct7rw1K2Fi23xk3vytxv5iWqpjeEXxqn88v7k4YIvCL41T+eX9xhCKw0Vyv6G34RgycEud/QThjlq6UguArbX+Zq+gxMJpn1oVbU7FZcFGC2y4bGeS+IqndoreaMyr+l9XsXZtxx3eTu0MHUfGyvN8adkl4Ezpqu0RuyrbWlvVets7+2fk2I6Or5Fkd6kavCJt3Vstsr/sapvWtr1uExj93RTotVFuNic1RVtftjH1yfMXNR73KDhFKnbPTVSMZRz3h4Fn2Po6SLdMz60TnjwnHZv/beaiumn7uqjZj1eNO1ETGd3dv3SOrmTdpOXGVOTiksjUVO9tm6D3fHY2MYjO7n38vP9k+l281YmZ37M45Tja4d37ymsZwVXO72qTU2lThFqLblxpfCe1Wtv39BHopuUbPZu4/WGUamNPd254VTndTEbuO+efu+odWlarTs904uEvKrXOerNuru3rq1XF633xh5rp7D8bNbelfxtz7D0mlriYw8vqqZpuZ7fNp6ir8tUPBD1OOKbpr20fp+cvQ9D+wn9Xyh7mUy4AAAAAAAAAAAAAAcrHu2JpdNKtfyZbdrNlHBy3+vT4sLkZOeZQlIlGUHIYY5RcicImUHIYY5aelZd4rdTV9BkTwZW59eFW1O0tSoYJLLmrcNjLpci9kVLXb2LZbdc7NHYruW43+q4+ktXZsX5nGa8R5bu5mxWm69R7JZFzQ3/wAz2+axaW9Lao4xlRXekrtc7pwzYLhJUneMq8eEbcFOpw1OWVJTTV+K921NXiYXYt03N07M47IxP8t2nvXa7U7tuM8ImdqN3Hdyl1YSnBOMJVqjU4KdOcI4pwhwUMtOSzRy7XNOS5YLdy8cxTVOZiKd04mJ2c7538J9273rHbqpiaaZmqcxmJiKsRsxunfGOeZjsdLCTUoJ0o8VeyYZXGnOSlttG6ve/h29Jz1xMVevO/1Z5um1MVUR6KndG3GMROJ7Of8AL7OipR2K8stJNKnGrxeDVtjfPfb0CKpieOI388cyq1TVTwzOKeWd2I5Slo+SUpwW5NuKunZJ7r8pN2JmmJllo6opqqojhHBV9Z8P+c/Zqz8zk39pa6Gvh3K/pOjETPZV5q5qUraboeLH1OOOHpn20d3zlZ9CTnTz+r5Q9wKddAAAAAAAAAAAAAAOPpN+6aXU4j+g20cJceo69Pi1M5m5ZlFzJRlFzCEHMMcoOZOES1NJS7zV6qr6DImNzK114UPV2N6P8bE+umWvR8/cR4+cvPdOzjW1d1PlDsQpnbtKSqpmVMjLXtzHB94IZIrmGTCVHTmprdukvjRe9f8AOWxjdpiunDp0uqmzcirlz98LBwae57LXi+dPc/pK7O7e9NTTFXCffDLo998Xgl6LMb3UbNJP3vx8nJ1mX53x12ROvRfhY9Keyr74+SqaoL8t4fxY+pxxy9Me2ju+bs6C/wCPP6vlD20qV4AAAAAAAAAAAAAA42lX7opdFKt/qt9022+EuPU9anxc5yNzilBzCMouQRlo19KUoz4OU0pq14pSbV917IZhMU1TGYhjw+lKc6tSjBvPS99dNLps+i9hE78IqomIiZTx8u81eqq+gxVG5NqfXhT9V4Xw/wDGxXr6hYaGfuI8fN5v+oJxrq+6n+2HcjA68qGZZFAZYZfXEnJlFxJymJdrAS71F8qUo+Z3X0NHBcj7yYeq0FzOmpq7ImPhP+GzgdtRPnjJ/wClmu7uodum33omOcT5ONrPPZN89WS8119h2aGN8dzT0pX91Pvq8v8AxV9UH+XMP4sfU445OmPbR3fNY9Bf8ef1fKHtpUrwAAAAAAAAAAAAABxdK/pEOqqdjN1vhLi1PWjxcm5tcGUWwjL42SjKt6TxKU8VT4R05z9jypyXCRvaKvxop7NjTMJ5t9G+KZx2t/AY2NWpXlCzhmpKMlFxcuJtu2k5W3GdM5mWquJpiMsuPl3qp1dT0WKuEsbc+vHerWqMfc38bFevqHbop+5jx83m/wCop/19fdT/AGw7sYnXlQzKdicscvlgkyjJl08DHvEn+1Lsgcl2fvY+u16Xoyf9FVPvnypbuhldqXIk+1fZc0amcblv0ZG163ZCq6x1uJD9rNUf7zb+0tdFTvn4KzX17UUR25n4y4Opcr6bw/ix9Tjiv6Z9tHd85X3QsY08/q+UPcSnXQAAAAAAAAAAAAADiaW/SafVVOxm63wlw6rrR4uLnN+FdlFyGEZQcicIyi5k4QxymMIa+Nl3qp1dT0WRVwlnan1473D1PXuVddi/X1Dq0fsY8fN5v+o5/wBwr7qf7Yd5I6lBl9sSGUjKBIxmpMZl1YrLhvGlLtt9hy5zeep0kej6NjP4pnzx8mWg8mFnLlknCPjS4q+mRjX616IWukzb0VVfOd0eO6PNSdZ63GaW6KUF4EXWkpxTntUt+dvUTEcI3fBytQpX01Q8EfU40qumvbU/p+cvUdERixP6vlD3YpluAAAAAAAAAAAAAA4WmX7op9VU7GbrXCXDq+tHir+Y6cKvL45Eoyg5Ayi5BGUHIIywYt97qeJU9FkVdWWdqfvI73J1NXuVddi/rFQ6NH7KPHzec/qT/sK+6n+2HfOtQBjMkPsYNmMy2U0TLYp0TXNTrt2W7pNZYwpcsYq/jPearG/Na/133dNvTxyiM96Wl58HClS+KnUn4VsS/md/IRp4266qu3ctNXixZotdkZnw/nyea6er3b8N2ehs04h5/TRtTNU82Pudv8s0PBH1ONKPpr21P6fnL13RcYsz3/KHvRTLQAAAAAAAAAAAAABwNOP3RT6qr2M32eEq/WcY8VczHVhVZRcxgyi5DCMoORODKLkMIywYqXe5+JP0WRX1ZbLPtKe+GhqX+iLrsX9YqG7R+yjxec/qT/sK+6n+2HeOpRYThTNc1N1u1ltUqRqmXfbtN/BUVmzP3sFmfk3Lzmi5VuxHNcaCxT6Tbq6tO+fl+6GDhwtbPLdHjv7EZXJ2LeIZdHUTq9ZN2rhG/wDw4WsGPzOc/jPi+JHYvtflO/SWtmIg6U1G3MzH4uHdHD/Lz/SdW7ZbU8GnT04ht9zj/vFD931ONPP9M+2j9Pzl6fo32U9/yh74U6zAAAAAAAAAAAAAAV3WB9/h1VXsZ0WOav13GPFWMx1qjKLkMIyi5Ayi5k4MoZghixEuJPxJ+izGvqy2WfaU98NbUn9EXXYv6xUNmk9lHi8//Ukf7hV3U/2wsUKZvqlU27bZp0zTMu+1abdOma5l327bNjHlgqS99K0qnQuSJro9ara+Ds1mbVqNPT1qt9Xyhhxs+BoZN1Srv54x5X5F9LM7UeluZ5QsLNj7Lpot/ir4+6Ofwj91D0virt23bkugvLVOIeeu1+luzMcI4KpjJXZ1Uu61GIdjuextpnDr9mPqcaee6Y9tHd85X/Rc5tT+r5Q95KhagAAAAAAAAAAAAAK5rG+/0+qq9jOmxzV2v5KpKR1qdC5Ii2EIuQMotgyxVnxZeJP0WY19WWyz7SnvfdRI+5F12L+sVCdLP3UeKn6foz0hV3U/2ws9OmbKpcNq02qdM0zKwt28NuklFcJLcver40v7I1VTn1YWVmKbVPpq+EcI7Z/jm+YWndurPcuM2+ViucRsxxbOj9NN25N+53+KpawaUzylJfD2Q6Ka5fLv8xaaWzsRjs8/4a+ktV6s1c6t0e6nt/8Aqd/dhUcfVLGhT2aHIpwzTS8r8CN/CHfM4pd7UaFtNYZv4UYteDgscvsPN9LVRN6PdD0HRluaLG/nL3QqlmAAAAAAAAAAAAAArWsz79T6qr2M6dPzVvSHJUZSO3Clyg5DAi5DA+OROBHMBjrS4svFn6LMK+rLbY9pT3w2u5/C+CXX4v6xUMNPP3ceLi6aozrqp91PlC106ZlVU57VpsJJJyk7RjtlLm/u+g1TPKHZTTTTTNdc4pjjP1znlDDTqutNKKst0Y/Fjzsz2PRRmri1WrlWuuxFMYpjhHZHv+bV1n0jGEfY8XxYq9V865IeF9nhM9JamqduePL69y/1E0W6PRfhiM1d3Knvq8u9QsVXcm5ve9y5lzFxTERuh5W/dqv3ZrlxcZUudFEN9qnDNovC3jmfw3lXRBbZy7F5TG7cinw+od9ixN2qIjt/9+Dv6v4fJpzBrc5UYSa5u94+y8yPM6yc3N/Y9TMRERTTwjdD2Q40gAAAAAAAAAAAAAKxrU+/U+rq9jOrTc1X0jyU2UjtU6OYCLkBFyAi2BGo9kvFl2Mxr6sttj2lPfDrdzmN8BF/5+M+sVDnsz6kI6Uozqqp90eULWopJttJJXlJ7kjKZaKKIiJqmcRHGexx8fiZVZKEE8qfEjyyb2Zn09h12bUURt18fJQa3VV6u5Fq1E7Od0c5ntn3+TqVqiwlFR2OvUVkuRc/7q5TmiJ1FzP4Y+vjL2mg0f2KzFPG5V9fCOc81E0jiM7e1uKbbk985vfJlvRTsx9blT0jqI9nTOYzx/NPOf8ADiYyqbqIV1ulzqVJ1JqEd8nZG/MU05l326JqmKY4ytuhsEpSVveQSjHpiuXyu78xXXq55+L0GitRE5jhw8Oc+Mtqjs1hwa5qEF5cmkCj1HWysanqxzpAAAAAAAAAAAAAAVTW12rUumnVt5E79qOvS81X0lyUxs7VK+XAjckfGwPjYEZbU0t7TS8LVjCuPVltszi5T3wy9y3WLDulUwM6kIVqVarUhGTSdWlVlwqlC/vnebVl0PlOG1XuxzWHSGn+89LPDG//AMXPE1XO0UuLfixW1t8752ddumKN88XmtVervzFFEbuUe/tntny5NujQjho8LNXqvZGK2tN/BXTzvkNdVyb9WzHBe9F9FU6SPS3Izcn9vdHv7Z5K5pSc5uUpe+lsk1ujHkhHoLC1FNMREfXvdusr9DaqqqnfPGfd2QrOOdth2Uxl43bm7XtOHiW2dFMOy3S6WiME0szTzTvGPOobpS8L3Ly8xpvXN+OxbaWzMRtTxnh7o5yuWApKjTdSdoqKu3JqMb8m1/8ANhWXaszjK+s07NKraqaWhjNYIVKDzU6CVLhF72eWji3KUedZqyV+XY+UrL9cVV7uDPfze2GhmAAAAAAAAAAAAAA52mtGKvBWsqkG3Tk921NOL6Gn2PkNlu5sTlo1FiL1GypNTVfFJ7KbfglBrybTujUW+1SV6DURO6M+KH+GcV8k/PT+8ZfaLfaw+xaj8v7vj1ZxfyT89P7w+0W+0+xaj8v7vn+GMX8k/wCan94faLfafYdR+V8/wvi/kn/NT+8PtFvtPsWo/L+75/hfGclJ35Hmp/eHp7XafYtR+X94UvWjuR4urVdfD02s+2dLNS2S/Y427o5Ni27yvrppifVncvLFy5NMRcpxLge0/pP5GfnofiGGHRtPvtPaT+Rl56H4gwjafPae0n8jLz0PxBg2n32ntJ/Iy89D8QYTtHtPaT+Rl56H4gwbR7T2k/kZeeh+IMI2kqfcc0m3bgmulyoJesGDaev9y3ueLRkJVa0lPFVFlbj7ylB2bjF8rbUbv9lLpcJX8JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2Q==" alt="phones">
         <a href="end.php">Buy now</a>
    </div>
</div><br>


                <!-- Movie 3 -->
               <div class="product-card">
    <div class="product-details">
        <h2 class="product-title">dress</h2>
        <p class="product-category"><strong>Category:</strong>dress</p>
        <p class="product-price"><strong>Price:</strong> $12.99</p>
        <p class="product-description">You're sure to find a style that suits her personality from the extensive range of dresses for girls from Popsicles, Coccodrillo, Frendz and other brands.</p>
        <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRqw8KPAdQtJIpc3g63_6ORbQQELmy_q0B_AfNFEY5cepoNNIzq7KG4XCROyQ2VkYct5UNvqMRMNwWI0exlAyTA4qOdnDibEJJzcrc07w" alt="dress">
        <a href="end.php">Buy now</a>
    </div>
</div><br>

                <!-- Movie 4 -->
               <div class="product-card">
    <div class="product-details">
        <h2 class="product-title">watch</h2>
        <p class="product-category"><strong>Category:</strong> Electronics</p>
        <p class="product-price"><strong>Price:</strong> $16.99</p>
        <p class="product-description">Shop stylish watches for boys and Girls at Fastrack. Buy Wrist Watches for men, women at best price.</p>
        <img src="data:image/jpeg;base64,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" alt="watch">
        <a href="end.php">Buy now</a>
    </div>
</div>

				
            </div>
        </section>
    </main>


    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <ul>
                    <li><a href="https://myaccount.google.com/privacypolicy">Privacy Policy</a></li>
                    <li><a href="https://myaccount.google.com/termsofservice">Terms of Service</a></li>
                    <li><a href="https://support.google.com/">Help Center</a></li>
                    <li><a href="https://www.website.com/contact-us/">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <ul>
                    <li><a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjCvY6Rk-aJAxW2IIMDHUT0AGwYABAAGgJzZg&ae=2&aspm=1&co=1&ase=2&gclid=Cj0KCQiA6Ou5BhCrARIsAPoTxrCY8Fac2_acEWSsB0MOtZipQDVTkCBbfNqOBJr9AfeyRM5zTSelTOEaAl0yEALw_wcB&ohost=www.google.com&cid=CAESVuD21QU10ljCAWQ4ts5uM771XEAORxHrXsszF6UdBdydE7dNgUq6JuLeSilURshZYgULtxtgVPr0FP9RUS61180Mc6OJgdR3LTEEGplYI5pt1hWLjO5w&sig=AOD64_2_jHKAbO0ZfogKyQqiNEv44sCwWw&q&nis=4&adurl&ved=2ahUKEwjot4mRk-aJAxW9RioJHZJkLRwQ0Qx6BAgKEAE">Facebook</a></li>
                    <li><a href="https://twitter.com/?lang=en">Twitter</a></li>
                    <li><a href="https://www.instagram.com/">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
