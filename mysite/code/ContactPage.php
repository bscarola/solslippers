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
            new TextField('EventType')
        );

        $validator = new RequiredFields('Name');

        // Create actions
        $actions = new FieldList(
            new FormAction('doBookingForm', 'Submit')
        );

        return new Form($this, 'BookingForm', $fields, $actions);
    }

    public function doBookingForm($data, $form) {
//        $submission = new BrowserPollSubmission();
//        $form->saveInto($submission);
//        $submission->write();
        var_dump( $data );
        return $this->redirectBack();
    }

}
