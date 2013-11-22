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
	alert("CHECKBOX_CHECK");
}

joyinfood.labeledCheckbox.prototype.handleCheckboxUncheck = function () {
	alert("CHECKBOX_UNCHECK");
}

joyinfood.labeledCheckbox.prototype.createDom = function() {
	goog.base(this, 'createDom');

	this.addChild(this.checkbox, true);
	this.addChild(this.label, true);	
};

