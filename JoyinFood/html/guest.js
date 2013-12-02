goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');
goog.require('goog.fx.DragDrop');
goog.require('joyinfood.friend');

goog.provide('joyinfood.guest');



joyinfood.guest = function(friendName, friendContainer, target) {
	goog.base(this);

	this.friendName = friendName;
	this.friendContainer = friendContainer;
	this.target = target;
	this.cancelButton = new goog.ui.Button("X");
	this.label = new goog.ui.Component();
};
goog.inherits(joyinfood.guest, goog.ui.Control);

joyinfood.guest.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	this.label.getElement().innerText = this.friendName;

	goog.dom.classes.add(this.getElement(), 'friend');

	goog.dom.classes.add(this.label.getElement(), 'label-friend');

	goog.dom.classes.add(this.cancelButton.getElement(), 'button-joyinfood');
	goog.dom.classes.add(this.cancelButton.getElement(), 'button-friend');

	goog.events.listen(this.cancelButton,
		goog.ui.Component.EventType.ACTION, 				
		this.handleCancelButton, null, this);
};

joyinfood.guest.prototype.handleCancelButton = function (e) {
	//alert("CANCEL_ACTIVE");
	e.friendName = this.friendName;
	goog.events.dispatchEvent(this.friendContainer, e);
	this.dispose();
};

joyinfood.guest.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.label, true);
	this.addChild(this.cancelButton, true);
};

