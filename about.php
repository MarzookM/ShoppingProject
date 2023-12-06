<?php
$pageTitle = "About Us";
include "view-header.php";
?>

<style>
    body {
        background-color: #f5f5f5;
        color: #333;
        font-family: 'Arial', sans-serif;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1, h2 {
        color: #007bff;
    }

    p {
        font-size: 1.1em;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .chart-container {
        width: 300px;
        margin: auto;
    }

    #myChart {
        width: 100%;
        height: auto;
        display: block;
        margin: 20px 0;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4">Welcome to MIS Mart</h1>

    <p class="lead">At MIS Mart, we take pride in providing high-quality groceries at affordable prices. Our mission is to make everyday essentials accessible to everyone, ensuring that you get the best value for your money.</p>

    <p>We understand the importance of community and giving back. As part of our commitment to philanthropy, MIS Mart actively supports local charities and initiatives. A percentage of every purchase you make goes towards community projects, helping us contribute to the well-being of those in need.</p>

    <h2 class="mt-4">Our Values</h2>
    <ul>
        <li><strong>Affordability:</strong> We believe that everyone deserves access to quality groceries without breaking the bank.</li>
        <li><strong>Community:</strong> Building strong, supportive communities is at the heart of what we do.</li>
        <li><strong>Philanthropy:</strong> Giving back is not just a choice; it's a responsibility. We are dedicated to making a positive impact.</li>
        <li><strong>Quality:</strong> We are committed to offering products that meet the highest standards of quality and freshness.</li>
    </ul>

    <!-- Separate container for the chart -->
    <div class="chart-container">
        <canvas id="myChart" width="200" height="100"></canvas>
    </div>

    <h2 class="mt-4">Our Philanthropic Initiatives</h2>
    <p>Through our "MIS Cares" program, we actively support local charities, food banks, and educational initiatives. We believe that a thriving community begins with access to basic necessities and educational opportunities. By shopping at MIS Mart, you become a part of this meaningful journey.</p>

    <h2 class="mt-4">Join Us in Making a Difference</h2>
    <p>Together, we can build a better future. Join us in our mission to provide affordable groceries, support local communities, and make a positive impact on the world.</p>

    <p class="text-center mt-5">
        <a href="Product.php" class="btn btn-primary btn-lg">Start Shopping</a>
    </p>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Now the chart container is present in the HTML
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1', '2', '3', '4', '5', '6'],
            datasets: [{
                label: '# of Numbers',
                data: [14, 20, 6, 7, 8, 1],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<?php
include "view-footer.php";
?>
