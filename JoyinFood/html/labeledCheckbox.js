goog.require('goog.ui.Control');
goog.require('goog.ui.Checkbox');
goog.require('goog.dom.classes');

goog.provide('joyinfood.labeledCheckbox');

joyinfood.labeledCheckbox = function(labelText) {
	goog.base(this);

	this.labelText = labelText
	this.label = new goog.ui.Component();
	this.checkbox = new goog.ui.Checkbox();
};
goog.inherits(joyinfood.labeledCheckbox, goog.ui.Control);

joyinfood.labeledCheckbox.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	this.label.getElement().innerText = this.labelText;

	goog.dom.classes.add(this.getElement(), 'labeledCheckbox');

	goog.dom.classes.add(this.label.getElement(), 'labeltext-labeledCheckbox');

	goog.dom.classes.add(this.checkbox.getElement(), 'checkbox-labeledCheckbox');

	goog.events.listen(this.checkbox, goog.ui.Component.EventType.CHECK, this.handleCheckboxCheck, null, this);
	goog.events.listen(this.checkbox, goog.ui.Component.EventType.UNCHECK, this.handleCheckboxUncheck, null, this);

};

joyinfood.labeledCheckbox.prototype.handleCheckboxCheck = function () {
	var mancareElement = document.getElementById("mancare") !== null ? document.getElementById("mancare") : document.getElementById("mancarelogat");
	mancareElement.innerHTML = "<p class = \"divp\"> Mancare </p>";

	var mancareContainer = document.getElementById("mancare") !== null ? "mancare" : "mancarelogat";

	var oferteElement = document.getElementById("oferte") !== null ? document.getElementById("oferte") : document.getElementById("ofertelogat");
	oferteElement.innerHTML = "<p class = \"divp\"> Oferte </p>";

	var oferteContainer = document.getElementById("oferte") !== null ? "oferte" : "ofertelogat";

	populate(produse, mancareContainer);
	populate(oferte, oferteContainer);
}

joyinfood.labeledCheckbox.prototype.handleCheckboxUncheck = function () {
	var mancare = document.getElementById("mancare") !== null ? document.getElementById("mancare") : document.getElementById("mancarelogat");
	mancare.innerHTML = "<p class = \"divp\"> Mancare </p>";

	var mancareContainer = document.getElementById("mancare") !== null ? "mancare" : "mancarelogat";

	var oferteElement = document.getElementById("oferte") !== null ? document.getElementById("oferte") : document.getElementById("ofertelogat");
	oferteElement.innerHTML = "<p class = \"divp\"> Oferte </p>";

	var oferteContainer = document.getElementById("oferte") !== null ? "oferte" : "ofertelogat";

	populate(produse, mancareContainer);
	populate(oferte, oferteContainer);
}

joyinfood.labeledCheckbox.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.checkbox, true);
	this.addChild(this.label, true);	
};

