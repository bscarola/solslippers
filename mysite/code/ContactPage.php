<?php
class ContactPage extends Page {

}

class ContactPage_Controller extends Page_Controller {

	private static $allowed_actions = array (
        'BookingForm'
	);

	public function init() {
		parent::init();
	}

    public function BookingForm() {
        // Create fields
        $fields = new FieldList(
            new TextField('Name'),
            new TextField('EmailAddress'),
            new TextField('Phone'),
            new TextField('EventType', 'Type of Event' ),
            new TextField('EventDate'),
            new TextField('EventLocation'),
            new TextareaField('AdditionalDetails')
        );

        $validator = new RequiredFields('Name', 'EmailAddress');

        // Create actions
        $actions = new FieldList(
            new FormAction('doBookingForm', 'Submit')
        );

        return new Form($this, 'BookingForm', $fields, $actions, $validator );
    }

    public function doBookingForm($data, $form) {
        $submission = new ContactSubmission();
        $form->saveInto($submission);
        $submission->write();
        return $this->redirectBack();
    }

}

class ContactSubmission extends DataObject {
    private static $db = array(
        'Name' => 'Varchar(256)',
        'EmailAddress' => 'Varchar(256)',
        'Phone' => 'Varchar(256)',
        'EventType' => 'Varchar(256)',
        'EventDate' => 'Varchar(256)',
        'EventLocation' => 'Varchar(256)',
        'AdditionalDetails' => 'text'
    );
}
