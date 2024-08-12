<?php
function areaOfTriangle($base, $height) {
    return 0.5 * $base * $height;
}

function areaOfSquare($side) {
    return $side * $side;
}

function areaOfRectangle($length, $width) {
    return $length * $width;
}

function areaOfCircle($radius) {
    return pi() * $radius * $radius;
}

// Example usage
$shape = readline("Enter the shape (triangle, square, rectangle, circle): ");

switch($shape) {
    case "triangle":
        $base = readline("Enter the base of the triangle: ");
        $height = readline("Enter the height of the triangle: ");
        $area = areaOfTriangle($base, $height);
        echo "The area of the triangle is: " . $area . "\n";
        break;
    
    case "square":
        $side = readline("Enter the side length of the square: ");
        $area = areaOfSquare($side);
        echo "The area of the square is: " . $area . "\n";
        break;
    
    case "rectangle":
        $length = readline("Enter the length of the rectangle: ");
        $width = readline("Enter the width of the rectangle: ");
        $area = areaOfRectangle($length, $width);
        echo "The area of the rectangle is: " . $area . "\n";
        break;
    
    case "circle":
        $radius = readline("Enter the radius of the circle: ");
        $area = areaOfCircle($radius);
        echo "The area of the circle is: " . $area . "\n";
        break;
    
    default:
        echo "Invalid shape entered.\n";
        break;
}
?>
