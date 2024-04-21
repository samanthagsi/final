function getBotResponse(input) {
    // Simple responses
    if (input == "hello") {
        return "Hey love! What can I do for you?";
    } else if (input == "hi") {
        return "Hi there! What can I do for you?";
    } else if (input == "commands") {
        return "Keywords/Commands: <br/><br/> <strong>menu</strong> - it will show our menu.<br/> <strong>contact</strong>- it will show 'contact info'. <br/> <strong>commands</strong> - it will show 'keyword'. <br/> <strong>how to order</strong> - it will show the instruction. <br/> <strong>location</strong> - it will show our address.";
    } else if (input == "menu") {
        return "Here's our menu: <br /><br /> Americano - ₱40.00 <br /> Latte - ₱45.00 <br /> Mocha - ₱50.00 <br /> Matcha Latte - ₱50.00 <br /> Cold Brew - ₱40.00 ";
    } else if (input == "about") {
        return "Hi there! <br /><br /> <strong>Cafe Graceland</strong> is a coffee shop and retailer in New York City.";
    } else if (input == "contact") {
        return "Here's our contact information: <br /><br /> <strong>Email:</strong> hey@cafegraceland.com <br /> <strong>Phone Number:</strong> 917 618 4324 <br /> <strong>Instagram:</strong> @cafegraceland <br /> <strong>Address:</strong> New York City ";
    } else if (input == "how to order") {
        return "Hi There! <br /><br /> To order, you can go to our <strong>Menu</strong> section and click the <strong'Add to Cart'></strong> button of your choice. <br /><br /> I hope you understand. Thank you so much!";
    } else if (input == "location") {
        return "Here's our address: <strong>441 E Fordham Rd Bronx, NY 10458</strong>";
   
    } else {
        return "Sorry I didn't quite get that. Try asking something else!";
    }
}