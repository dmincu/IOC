goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');

goog.provide('joyinfood.joinAlert');

joyinfood.joinAlert = function(personName) {
	goog.base(this);

	this.personName = personName;

	this.okButton = new goog.ui.Button("OK");
	this.cancelButton = new goog.ui.Button("Cancel");
	this.message = new goog.ui.Component();
};
goog.inherits(joyinfood.joinAlert, goog.ui.Control);

joyinfood.joinAlert.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	goog.dom.classes.add(this.getElement(), 'joinAlert');

	goog.dom.classes.add(this.okButton.getElement(), 'button-joyinfood');
	goog.dom.classes.add(this.cancelButton.getElement(), 'button-joyinfood');

	goog.dom.classes.add(this.okButton.getElement(), 'button-joinAlert-ok');
	goog.dom.classes.add(this.cancelButton.getElement(), 'button-joinAlert-cancel');

	goog.dom.classes.add(this.message.getElement(), 'message-joinAlert');

	this.message.getElement().innerText = this.personName + " wants to join your food. Agree?";

	goog.events.listen(this.okButton, goog.ui.Component.EventType.ACTION, this.handleOkButtonClick, null, this);
	goog.events.listen(this.cancelButton, goog.ui.Component.EventType.ACTION, this.handleCancelButtonClick, null, this);
};

joyinfood.joinAlert.prototype.handleOkButtonClick = function () {
	alert("OK");
};
joyinfood.joinAlert.prototype.handleCancelButtonClick = function () {
	alert("Cancel");
};

joyinfood.joinAlert.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.message, true);
	this.addChild(this.cancelButton, true);
	this.addChild(this.okButton, true);
};

