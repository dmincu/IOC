goog.require('goog.ui.Control');
goog.require('goog.ui.Button');
goog.require('goog.dom.classes');
goog.require('goog.fx.DragDrop');

goog.provide('joyinfood.friend');



joyinfood.friend = function(friendName) {
	goog.base(this);

	this.friendName = friendName;
	this.label = new goog.ui.Component();
};
goog.inherits(joyinfood.friend, goog.ui.Control);

joyinfood.friend.prototype.enterDocument = function() {
	goog.base(this, 'enterDocument');

	this.label.getElement().innerText = this.friendName;

	goog.dom.classes.add(this.getElement(), 'friend');

	goog.dom.classes.add(this.label.getElement(), 'label-friend');
};

joyinfood.friend.prototype.exitDocument = function() {
	goog.base(this, 'exitDocument');

	goog.dispose(this.label);
};

joyinfood.friend.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.label, true);
};

