goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');

goog.provide('joyinfood.friend');

joyinfood.friend = function(friendName) {
	goog.base(this);

	this.friendName = friendName;
	this.cancelButton = new goog.ui.Button("X");
	this.label = new goog.ui.Component();
};
goog.inherits(joyinfood.friend, goog.ui.Control);

joyinfood.friend.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	this.label.getElement().innerText = this.friendName;

	goog.dom.classes.add(this.getElement(), 'friend');

	goog.dom.classes.add(this.label.getElement(), 'label-friend');

	goog.dom.classes.add(this.cancelButton.getElement(), 'button-joyinfood');
	goog.dom.classes.add(this.cancelButton.getElement(), 'button-friend');

	goog.events.listen(this.cancelButton, goog.ui.Component.EventType.ACTION, this.handleCancelButton, null, this);
};

joyinfood.friend.prototype.handleCancelButton = function () {
	alert("CANCEL_ACTIVE");
	this.dispose();
}

joyinfood.friend.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.label, true);
	this.addChild(this.cancelButton, true);
};

