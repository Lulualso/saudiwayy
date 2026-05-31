<?php
include("database.php");

$sql = "INSERT INTO places
(name, city, category, price, image_url, rating, family_type)
VALUES
('Bujairi Terrace', 'Riyadh', 'Restaurant', 250, 'bujairi.jpg', 4.9, 'adults'),
('Al Masmak Fortress', 'Riyadh', 'Heritage', 10, 'masmak.jpg', 4.8, 'children'),
('National Museum', 'Riyadh', 'Art & Culture', 25, 'museum.jpg', 4.7, 'children'),
('Sky Bridge', 'Riyadh', 'Landmarks', 69, 'skybridge.jpg', 4.8, 'children'),
('Riyadh Zoo', 'Riyadh', 'Family & Activities', 15, 'zoo.jpg', 4.4, 'children'),
('Diplomatic Quarter Park', 'Riyadh', 'Parks & Nature', 0, 'dq.jpg', 4.6, 'children'),
('Salam Park', 'Riyadh', 'Parks & Nature', 10, 'salampark.jpg', 4.5, 'children'),
('Edge of the World', 'Riyadh', 'Adventure', 200, 'edgeworld.jpg', 4.9, 'adults'),
('Al Rajhi Grand Mosque', 'Riyadh', 'Religious', 0, 'rajhi.jpg', 4.9, 'children'),
('Cenomi U Walk', 'Riyadh', 'Entertainment', 0, 'uwalk.jpg', 4.7, 'children'),
('Solitaire Mall', 'Riyadh', 'Shopping', 0, 'solitaire.jpg', 4.7, 'children'),
('Beast House', 'Riyadh', 'Entertainment', 180, 'beasthouse.jpg', 4.6, 'adults'),
('VOX Cinema Riyadh Front', 'Riyadh', 'Entertainment', 75, 'vox.jpg', 4.7, 'children'),
('Riyadh Front', 'Riyadh', 'Entertainment', 0, 'riyadhfront.jpg', 4.8, 'children'),
('The Groves', 'Riyadh', 'Dining', 220, 'groves.jpg', 4.8, 'adults'),
('Mamo Michelangelo', 'Riyadh', 'Dining', 350, 'mamo.jpg', 4.7, 'adults'),
('Nozomi Riyadh', 'Riyadh', 'Dining', 300, 'nozomi.jpg', 4.8, 'adults'),
('Urth Caffe', 'Riyadh', 'Dining', 95, 'urth.jpg', 4.7, 'children'),
('Half Million', 'Riyadh', 'Cafe', 45, 'halfmillion.jpg', 4.6, 'children'),
('Camel Step', 'Riyadh', 'Cafe', 40, 'camelstep.jpg', 4.7, 'children'),
('Riyadh Season', 'Riyadh', 'Entertainment', 150, 'season.jpg', 4.9, 'children'),
('Winter Wonderland', 'Riyadh', 'Entertainment', 120, 'wonderland.jpg', 4.8, 'children'),
('Snow City', 'Riyadh', 'Family & Activities', 90, 'snowcity.jpg', 4.5, 'children'),
('Al Nakheel Park', 'Riyadh', 'Parks & Nature', 0, 'nakheelpark.jpg', 4.4, 'children'),
('Riyadh Boulevard Runway', 'Riyadh', 'Entertainment', 80, 'runway.jpg', 4.8, 'children'),
('Saudi Cup Venue', 'Riyadh', 'Sports', 250, 'saudicup.jpg', 4.9, 'adults'),
('Prince Faisal Arts Hall', 'Riyadh', 'Art & Culture', 30, 'artshall.jpg', 4.5, 'children'),
('Souq Al Zal', 'Riyadh', 'Shopping', 0, 'souqzal.jpg', 4.7, 'children'),
('Riyadh Safari', 'Riyadh', 'Adventure', 110, 'safari.jpg', 4.6, 'adults'),
('Wonder Garden', 'Riyadh', 'Family & Activities', 85, 'wondergarden.jpg', 4.5, 'children'),
('Time Out Market Riyadh', 'Riyadh', 'Dining', 130, 'timeout.jpg', 4.8, 'children'),
('LPM Riyadh', 'Riyadh', 'Dining', 420, 'lpm.jpg', 4.9, 'adults'),
('Najd Village', 'Riyadh', 'Dining', 150, 'najd.jpg', 4.6, 'children'),
('Laysen Valley', 'Riyadh', 'Landmarks', 90, 'laysen.jpg', 4.8, 'children'),
('KAFD Conference Center', 'Riyadh', 'Business', 200, 'kafdconference.jpg', 4.6, 'adults')
";

if (mysqli_query($conn, $sql)) {
    echo "All 35 records inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>