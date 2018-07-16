<div id="contact-page" uk-modal>
	<div class="uk-modal-dialog">
		<button class="uk-modal-close-default" type="button" uk-close></button>
		
		<div class="uk-modal-body">
			<form action="#" method="GET" id="contact-form">
				<legend class="uk-legend">Contact</legend>
				
				<div class="uk-margin">
					<input class="uk-input" type="text" placeholder="Name" name="name" required>
				</div>
				<div class="uk-margin">
					<input class="uk-input" type="email" placeholder="Email" name="email" required>
				</div>

				<div class="uk-margin">
					<textarea class="uk-textarea" rows="5" placeholder="Message" name="message" required></textarea>
				</div>

			</div>
			<div class="uk-modal-footer uk-text-right">
				<button class="uk-button uk-button-secondary uk-modal-close" type="submit">Send</button>
			</div>
		</form>
	</div>
</div>
