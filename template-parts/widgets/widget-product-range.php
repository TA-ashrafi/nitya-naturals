<?php
/**
 * Widget Template: Product Range Catalog Table with Live Search
 */
?>
<section class="section nitya-widget-product-range">
	<div class="container">
		<p style="text-align: center; max-width: 900px; margin: 0 auto 20px;">
			<?php esc_html_e('When you choose Nitya Naturals as your ayurvedic medicine manufacturer you are choosing a legacy of over 100 years of Ayurvedic traditional knowledge and experience. Here is a list of products that are available for private labeling in your own brand.', 'nitya-naturals'); ?>
		</p>
		<p style="text-align: center; max-width: 900px; margin: 0 auto 30px; font-weight: 600; color: var(--primary-color);">
			<?php esc_html_e('"All the products are registered for their commercial uses and regulated by Ministry of AYUSH, Drug Control Cell (DCC) to administer regulatory and quality control provisions for Ayurveda, Siddha, Unani & Homoeopathy (AYUSH) drugs."', 'nitya-naturals'); ?>
		</p>

		<!-- SEARCH BOX -->
		<div class="product-search-wrapper">
			<input type="text" id="productSearch" class="product-search-input" placeholder="<?php esc_attr_e('Search products by name, use, dosage form or type...', 'nitya-naturals'); ?>">
			<span class="product-search-icon"><i class="fa-solid fa-magnifying-glass"></i></span>
		</div>
		<p id="productCount" class="product-count"></p>

		<div class="custom-table-wrapper">
			<table class="custom-table" id="productTable">
				<thead>
					<tr>
						<th><?php esc_html_e('Product Name', 'nitya-naturals'); ?></th>
						<th><?php esc_html_e('Intended Use', 'nitya-naturals'); ?></th>
						<th><?php esc_html_e('Dosage Form', 'nitya-naturals'); ?></th>
						<th><?php esc_html_e('Type', 'nitya-naturals'); ?></th>
					</tr>
				</thead>
				<tbody>
					<!-- SINGLE HERBS (CAPSULES) -->
					<tr><td><strong>Amalki</strong></td><td>Digestion, Antiacid, Immunity</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Arjuna</strong></td><td>Cardiac Care, Cholesterol</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Ashwagandha</strong></td><td>Mental Health, Stress & Anxiety</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Bael</strong></td><td>Digestion</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Beheda</strong></td><td>Metabolism</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Brahmi</strong></td><td>Mental Health</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Gokshura</strong></td><td>Kidney Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Guduchi</strong></td><td>Immunity, Mental Health</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Guggulu</strong></td><td>Joint Care, Cholesterol</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Haridra</strong></td><td>Skin Care, Allergy, Inflammation</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Haritaki</strong></td><td>Digestion, Laxative</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Kapikachu</strong></td><td>Mens Vitality</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Karela</strong></td><td>Metabolism, Skin Care, Blood Purifier</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Kumari</strong></td><td>Digestion, Metabolism, Womens Health, Skin Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Lahsun</strong></td><td>Blood Purifier, Cholesterol, Blood Thinner</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Mandukaparni</strong></td><td>Mental Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Manjishta</strong></td><td>Blood Purifier, Metabolism, Skin Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Meshasringi</strong></td><td>Diabetes, Metabolism</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Moringa</strong></td><td>Inflammation, Immunity, Health Tonic</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Musli</strong></td><td>Health Supplement, Mens Health</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Neem</strong></td><td>Inflammation, Blood Purifier, Metabolism, Skin Care, Immunity</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Neruri</strong></td><td>Liver Care, Skin Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Punarnava</strong></td><td>Kidney Care, Liver Care, Skin Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Shallaki</strong></td><td>Muscular Health, Nervine Health</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Shatavari</strong></td><td>Womens Health, Lactation</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Sunthi</strong></td><td>Joint Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Tagar</strong></td><td>Nervine Health, Stress & Anxiety</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Trikatu</strong></td><td>Lungs Care, Metabolism</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Tulsi</strong></td><td>Immunity, Skin Care, Lung Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Vasaka</strong></td><td>Lung Care</td><td>Capsule</td><td>Single Herbs</td></tr>
					<tr><td><strong>Yashtimadhu</strong></td><td>Oral Care, Throat Care, Metabolism</td><td>Capsule</td><td>Single Herbs</td></tr>

					<!-- FORMULATIONS (CAPSULES) -->
					<tr><td><strong>Chyawan Cap</strong></td><td>Immunity, Health Supplement</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Acid Relief</strong></td><td>Digestion, Liver Care, Antiacid</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Allergy Control</strong></td><td>Immunity, Metabolism, Allergy</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Bowel Kare</strong></td><td>Digestion, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Broncho Aid</strong></td><td>Lung Care, Immunity</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Cardiac Kare</strong></td><td>Cardiac Care, Cholesterol</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Dia Kare</strong></td><td>Diabetes, Endocrine Diabetes, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Gas Relief</strong></td><td>Digestion</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Heart XL</strong></td><td>Cardiac Care, Cholesterol</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Immune Boost</strong></td><td>Immunity</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Joint Fix</strong></td><td>Joint Care, Ortho Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Kidney Cleanse</strong></td><td>Kidney Care, Blood Purifier, Water Retention</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Kolon Cleanse</strong></td><td>Digestion</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Liver Revive</strong></td><td>Liver Care, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Menz Vigor</strong></td><td>Mens Health, Vitality/Vigor</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Menopause AID</strong></td><td>Womens Health, Menopause</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Skin XL</strong></td><td>Skin Care, Blood Purifier, Weight Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Slimtrim</strong></td><td>Cholesterol, Kidney Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Throat Kare</strong></td><td>Lung Care, Oral Care, Throat Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Triphala XL</strong></td><td>Digestion, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Womenz Vigor</strong></td><td>Womens Health</td><td>Capsule</td><td>Formulation</td></tr>

					<!-- XT FORMULATIONS (CAPSULES) -->
					<tr><td><strong>Arjuna XT</strong></td><td>Cardiac Care, Cholesterol</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Ashwagandha XT</strong></td><td>Muscular Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Bael XT</strong></td><td>Digestion</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Brahmi XT</strong></td><td>Mental Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Guduchi XT</strong></td><td>Immunity, Mental Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Haridra XT</strong></td><td>Skin Care, Allergy, Inflammation</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Karela XT</strong></td><td>Diabetes, Metabolism, Skin Care, Blood Purifier</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Meshasringi XT</strong></td><td>Diabetes, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Musli XT</strong></td><td>Mens Health, Vitality/Vigor</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Neem XT</strong></td><td>Blood Purifier, Inflammation, Skin Care, Immunity, Diabetes, Metabolism</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Neruri XT</strong></td><td>Digestion, Liver Care, Laxative</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Punarnava XT</strong></td><td>Kidney Care, Health Supplement</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Shallaki XT</strong></td><td>Muscular Health, Nervine Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Shatavari XT</strong></td><td>Womens Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Tulsi XT</strong></td><td>Immunity, Metabolism, Lung Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Vasaka XT</strong></td><td>Lung Care, Throat Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Memory XL</strong></td><td>Mental Care</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Triphala</strong></td><td>Metabolism, Eye Care, Oral Care, Digestion, Health Supplement</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Tagar XT</strong></td><td>Muscular Health, Nervine Health</td><td>Capsule</td><td>Formulation</td></tr>
					<tr><td><strong>Manjistha XT</strong></td><td>Blood Purifier, Skin Care</td><td>Capsule</td><td>Formulation</td></tr>

					<!-- LIQUID (SYRUPS) -->
					<tr><td><strong>Krumibi</strong></td><td>Digestion, Skin Care</td><td>Liquid (Syrups)</td><td>Formulation</td></tr>
					<tr><td><strong>Cerebex</strong></td><td>Mental Health</td><td>Liquid (Syrups)</td><td>Formulation</td></tr>
					<tr><td><strong>Bispet Plus Syp</strong></td><td>Health Tonic, Immunity</td><td>Liquid (Syrups)</td><td>Formulation</td></tr>
					<tr><td><strong>Brihat Manjisthadi Kwath</strong></td><td>Skin Care, Muscular Health</td><td>Liquid (Syrups)</td><td>Formulation</td></tr>
					<tr><td><strong>Lukotone Plus Syp</strong></td><td>Womens Health</td><td>Liquid (Syrups)</td><td>Formulation</td></tr>

					<!-- LIQUID (OILS) -->
					<tr><td><strong>Tridoshic Oil</strong></td><td>Massage Oil, Neuromuscular, Paralysis</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Kapha Massage Oil</strong></td><td>Massage Oil, Joint Stiffness, Frozen Shoulder, Rheumatoid Disorder, Arthritis</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Vata Massage Oil</strong></td><td>Massage Oil, Nervine Health, Sciatica</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Pitta Massage Oil</strong></td><td>Massage Oil, Inflammation, Internal Pain Management, Gout</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Shadbindu Taila</strong></td><td>Nasal Care, Lung Care, Sinus</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Narayan Tailam (Mahatt)</strong></td><td>Nervine Health, Osteoarthritis, Internal and External Pain Management</td><td>Liquid (Oils)</td><td>Formulation</td></tr>
					<tr><td><strong>Panchagun Taila</strong></td><td>Osteoarthritis, Wound Healing, External Burns, Local Analgesic</td><td>Liquid (Oils)</td><td>Formulation</td></tr>

					<!-- LIQUID (MOUTH WASH) -->
					<tr><td><strong>Orafresh Herbal</strong></td><td>Mouthwash</td><td>Liquid (Mouth Wash)</td><td>Formulation</td></tr>

					<!-- TABLETS (FORMULATIONS) -->
					<tr><td><strong>Triphala</strong></td><td>Metabolism, Eye Care, Oral Care, Digestion, Health Supplement</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Avipittkar Tablet</strong></td><td>Digestion, Antacid</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Rheumabi DS</strong></td><td>Joint, Ortho Care</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Triphala Guggul Forte</strong></td><td>Digestion, Metabolism</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Dicare SF (DS)</strong></td><td>Diabetes, Metabolism</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Ayuslim</strong></td><td>Metabolism, Endocrine, Weight Metabolism</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Kishore G</strong></td><td>Joint Care, Gout, Skin Care</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Thyroactive Plus</strong></td><td>Endocrine, Thyroid, Cyst, Tumour & Fistula, Hair Care, Digestion, Skin Care, Muscular Care</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Biliv SF</strong></td><td>Liver Care</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Cystonbi</strong></td><td>Kidney, Cyst</td><td>Tablets</td><td>Formulation</td></tr>
					<tr><td><strong>Mentabi Plus</strong></td><td>Memory, Mental Health</td><td>Tablets</td><td>Formulation</td></tr>

					<!-- TABLETS (SINGLE HERBS) -->
					<tr><td><strong>Haridra</strong></td><td>Digestion, Liver Care</td><td>Tablets</td><td>Single Herbs</td></tr>
					<tr><td><strong>Niruri</strong></td><td>Liver Care, Kidney Care</td><td>Tablets</td><td>Single Herbs</td></tr>
					<tr><td><strong>Haritaki</strong></td><td>Digestion</td><td>Tablets</td><td>Single Herbs</td></tr>
					<tr><td><strong>Shatavari</strong></td><td>Lactation, Women's Health</td><td>Tablets</td><td>Single Herbs</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
