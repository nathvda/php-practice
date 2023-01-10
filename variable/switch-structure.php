<?php 

echo '<form><label for="grade">
Please enter a grade:</label>
<input type="number"  min="0" name="grade" required>
<input type="submit" name="submit" value="Grade"></form>';

if (isset($_GET['grade'])){
    $grade = $_GET['grade'];
    switch ($grade) {
        case 1: 
        echo "This work is really bad. What a dumb kid!";
        break;
        case 2: 
            echo "This work is really bad. What a dumb kid!";
            break;
            case 3: 
                echo "This work is really bad. What a dumb kid!";
                break;
                case 4: 
                    echo "This work is really bad. What a dumb kid!";
                    break;
        case 5: 
        echo "This is not sufficient. More studying is required.";
        break;
        case 6: 
            echo "This is not sufficient. More studying is required.";
            break;
            case 7: 
                echo "This is not sufficient. More studying is required.";
                break;
                case 8: 
                    echo "This is not sufficient. More studying is required.";
                    break;
                    case 9: 
                        echo "This is not sufficient. More studying is required.";
                        break;
                        case 10: 
                            echo "barely enough!";
                            break;
                            case 11: 
                                echo "Not bad!";
                                break;
                                case 12: 
                                    echo "Not bad!"; 
                                    break;
                                    case 13: 
                                        echo "Not bad!";  
                                        break;
                                        case 14: 
                                            echo "Not bad!";  
                                            break;
                                            case 15: 
                                                echo "Bravo, bravissimo!";
                                                break;
                                                case 16: 
                                                    echo "Bravo, bravissimo!";
                                                    break;
                                                    case 17: 
                                                        echo "Bravo, bravissimo!";
                                                        break;
                                                        case 18: 
                                                            echo "Bravo, bravissimo!";
                                                            break;
                                                            case 19: 
                                                                echo "Too good to be true : confront the cheater!";
                                                                break;
                                                                case 20: 
                                                                    echo "Too good to be true : confront the cheater!";
                                                                    break;
                                                                    default: 
                                                                    echo "No grade entered";
    };
}

?>