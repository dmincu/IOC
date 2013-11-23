goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');

goog.provide('joyinfood.foodItem');

joyinfood.foodItem = function(imageUrl, itemName, itemInformation) {
	goog.base(this);

	this.imageUrl = imageUrl;
	this.itemName = itemName;
	this.itemInformation = itemInformation;
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

	this.description.getElement().innerText = this.itemName + "\n" + this.itemInformation;
	goog.dom.classes.add(this.description.getElement(), 'description-foodItem');

	goog.dom.classes.add(this.addToCartButton.getElement(), 'button-joyinfood');

	goog.events.listen(this.addToCartButton, goog.ui.Component.EventType.ACTION, this.handleButtonClick, null, this);
};

joyinfood.foodItem.prototype.handleButtonClick = function () {
	alert("FOODITEM_SELECTED");
}

joyinfood.foodItem.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.description, true);
	this.addChild(this.imageElement, true);
	this.addChild(this.addToCartButton, true);
	
};

