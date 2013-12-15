goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');

goog.provide('joyinfood.foodItem');

joyinfood.foodItem = function(item) {
	goog.base(this);

	this.imageUrl = item.imageUrl;
	this.itemName = item.name;
	this.itemInformation = item.information;
	this.itemPrice = item.price;
	this.restaurant = item.restaurant;
	this.alergeni = item.alergeni;
	this.category = item.category;
	this.addToCartButton = new goog.ui.Button("Add To Cart");
	this.imageElement = new goog.ui.Component();
	this.description = new goog.ui.Component();
};
goog.inherits(joyinfood.foodItem, goog.ui.Control);

joyinfood.foodItem.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	goog.dom.classes.add(this.getElement(), 'foodItem');

	img = new Image();
	img.src = this.imageUrl;
	this.imageElement.getElement().appendChild(img);
	goog.dom.classes.add(this.imageElement.getElement(), 'image-foodItem');

	this.description.getElement().innerHTML = "<b>" + this.itemName + "</b>(" + this.restaurant + ")<br>" + this.itemInformation + "<br><b>Pret: " + this.itemPrice;
	goog.dom.classes.add(this.description.getElement(), 'description-foodItem');

	goog.dom.classes.add(this.addToCartButton.getElement(), 'button-joyinfood');

	goog.events.listen(this.addToCartButton, goog.ui.Component.EventType.ACTION, this.handleButtonClick, null, this);
};

joyinfood.foodItem.prototype.handleButtonClick = function () {
	// aici sa fac ceva 
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		console.log(xmlhttp.responseText);
	  }
	}
	xmlhttp.open("GET","add_food.php?mancare=" + this.itemName + "&restaurant=" + this.restaurant + "&pret=" + this.itemPrice, true);
	xmlhttp.send();
}

joyinfood.foodItem.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.description, true);
	this.addChild(this.imageElement, true);
	this.addChild(this.addToCartButton, true);
	
};

