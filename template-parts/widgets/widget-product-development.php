<?php
/**
 * Widget Template: New Product Development & WhatsApp Brief Form
 */
?>
<section class="section product-development-section" id="develop">
	<div class="container">
		<div class="development-panel-frame">
			<div class="panel-grid-layout">
				<!-- LEFT INFO & STEPS -->
				<div class="panel-info-col">
					<span class="sub-heading-badge badge-light-bg"><i class="fa-solid fa-flask"></i> CUSTOM FORMULATION</span>
					<h2 class="panel-main-title">New Product Development</h2>
					<p class="panel-subtitle">Tell us what you want to launch.</p>
					<p class="panel-description">
						With the knowledge and expertise of our team, we help you custom-create any product according to your requirements. Send the brief and we come back with feasibility, cost and timeline.
					</p>

					<ul class="development-steps-list">
						<li><b>01</b> New product name</li>
						<li><b>02</b> Intended composition</li>
						<li><b>03</b> Product functions</li>
						<li><b>04</b> Product position</li>
						<li><b>05</b> Dosage form &amp; MOQ</li>
					</ul>
				</div>

				<!-- RIGHT INTERACTIVE BRIEF FORM -->
				<div class="panel-form-col">
					<form id="rfqForm" class="npd-brief-form" novalidate>
						<div class="form-row-two">
							<div class="field-item">
								<label for="pname">New product name</label>
								<input type="text" id="pname" name="pname" placeholder="e.g. Amla Immunity Gummies" required>
								<span class="field-err">Please enter a product name.</span>
							</div>
							<div class="field-item">
								<label for="company">Company</label>
								<input type="text" id="company" name="company" placeholder="Brand or company" required>
								<span class="field-err">Please enter your company.</span>
							</div>
						</div>

						<div class="form-row-two">
							<div class="field-item">
								<label for="email">Email</label>
								<input type="email" id="email" name="email" placeholder="you@company.com" required>
								<span class="field-err">Please enter a valid email.</span>
							</div>
							<div class="field-item">
								<label for="phone">WhatsApp / Phone</label>
								<input type="text" id="phone" name="phone" placeholder="+91 ..." required>
								<span class="field-err">Please enter a contact number.</span>
							</div>
						</div>

						<div class="field-item">
							<label for="composition">Intended composition</label>
							<textarea id="composition" name="composition" rows="3" placeholder="Herbs, actives, strengths you have in mind"></textarea>
						</div>

						<div class="form-row-two">
							<div class="field-item">
								<label for="form">Dosage form</label>
								<select id="form" name="form">
									<option value="Capsules">Capsules</option>
									<option value="Tablets">Tablets</option>
									<option value="Syrups">Syrups</option>
									<option value="Oils">Oils</option>
									<option value="Creams">Creams</option>
									<option value="Pastes">Pastes</option>
									<option value="Not sure yet">Not sure yet</option>
								</select>
							</div>
							<div class="field-item">
								<label for="moq">Target MOQ / volume</label>
								<input type="text" id="moq" name="moq" placeholder="e.g. 5,000 units per month" required>
								<span class="field-err">Please give a rough volume.</span>
							</div>
						</div>

						<div class="field-item">
							<label for="brief">Product functions &amp; position</label>
							<textarea id="brief" name="brief" rows="3" placeholder="What it should do, who it is for, where it sits on the shelf"></textarea>
						</div>

						<button type="submit" class="btn-send-brief">
							<i class="fa-solid fa-paper-plane"></i> Send Development Brief
						</button>

						<p class="form-footnote">
							Submitting opens WhatsApp with your brief pre-filled, so nothing is lost. You can also email us at <a href="mailto:ald.nitya@gmail.com">ald.nitya@gmail.com</a>.
						</p>
					</form>

					<div class="form-success-box" id="formSuccess" role="status">
						<h4>Brief ready to send.</h4>
						<p>WhatsApp should have opened with your development brief. If it did not, <a id="waFallback" href="#" target="_blank">tap here</a> or email it to <a href="mailto:ald.nitya@gmail.com">ald.nitya@gmail.com</a> and our team will reply with feasibility, cost and timeline.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
