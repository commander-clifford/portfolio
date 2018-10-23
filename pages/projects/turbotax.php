<header class="work-header">
	<h1 class="work-header-headline heading-typ-1 wp">Intuit Turbotax</h1>
	<p class="work-header-subheadline">Front-End Development & Prototyping</p>
</header>

<div class="row work-content" style="margin-top: 40px"> <!-- HACK get rid of the inline style -->

	<div class="col-xs-12 col-md-4">
		<p>
			While contracting with Intuit from 2014-2016 I was on a team responsible for the
			TurboTax homepage and then on the Design Studio Team as a Prototyper.
		</p>
		<p>
			With the <strong>Design Studio at Intuit</strong> I got to help bring
			ideas to life in several projects, especially in the 'self employed',
			'humanizing', 20 year vision projects.
		</p>
		<p>
			Most of my focus went to the <strong>Prototyping frame work</strong> appropriately
			dubbed TurboTax Prototyping Platform or TTPF. This was setup with an
			<strong>Angular</strong> framework and simulated the entire TurboTax <strong>experience end to end</strong>.
			It had an emulated homepage and a <strong>Hi-fidelity</strong> click though of the app
			with no real data - just inputs passed between screens.
		</p>
		<p>
			Most of this code was considered scrappy, and that was celebrated
			because scrappy meant <strong>quick iterations</strong>. The only code
			in TTPF that was typically strait copy/pasted into production was the
			animation code written in GSAP.
			A lot of effort was put into the motion of those animations and our
			GSAP was robust enough to translate directly to product in most cases.
		</p>
		<p>
			It wasn't all code. One <strong>story telling exercise</strong> quickly became to big
			for our TTPF. So we used Apple's Keynote to do some really neat animations that emulated
			things like talking to your car and TV about your finances.
		</p>
	</div>
	<div class="col-xs-12 col-md-8">
		<div class="work-content-display">
			<a href="https://turbotax.intuit.com/" class="" target="_blank">
				<img class="img-responsive" src="img/turbotax-self-employed.png">
			</a>

		</div>
	</div>
</div>

<div class="row work-content">
	<div class="col-xs-12 col-md-8">
		<div class="work-content-display">
			<a href="https://turbotax.intuit.com/" class="" target="_blank">
				<img class="img-responsive" src="img/ttcom1.png">
			</a>
		</div>
	</div>
	<div class="col-xs-12 col-md-4">
		<p>
			While on the .com team my piers and I were responsible for everything
			on the homepage. I made several solo and notable contributions to the
			home page. Mostly around prototyping new concepts from design that the
			other engineers didn't quite grasp.
		</p>
		<p>
			Here's a <strong><a href="https://codepen.io/commander-clifford/pen/yaZwax" target="_blank">
			low-fidelity prototype</a></strong> of how the header would hold three
			different fixed content bars and still work with the sudo parallax
			effect of the gradient area.
		</p>
		<p>
			I worked closely with a visual/interaction designer to create story
			telling animations that highlighted the applications own-able moments.
			The challenge was these animations became very complex and were iterating
			rapidly. To combat the volatile nature of these animations we devised a system
			where each iteration only required a single file update that the designer
			could accomplish. Letting iterations happen in almost real time.
		</p>
		<p>
			The essence of one design request was to simplify the navigation
			only on the homepage, which had some major SEO implications. In order
			to simplify the navigation it was decided that most navigation items would
			live behind a menu icon and only the most important (to business goals) items
			would be on top. But then the items behind the menu icon lost their SEO
			value since they were hidden behind a click. We decided, to change this
			interaction to a hover. But it wasn't as simple as a change in trigger.
		</p>
		<p>
			This is where my specialty shines. As one engineer attempted to solve
			this riddle by simply changing the trigger that called the function,
			it created a whirlwind of menu screen flashing that could cause a seizure.
			So I stepped in and prototyped an almost entirely new experience with the menu.
		</p>
		<p>
			I was able to include one of my famous
			<a class="" href="<?=$index?>&project=morphing-icons">morphing icons</a>
			to indicate the function of the button after hovering it to open the menu.
			I even added an interaction delay that would prevent accidental opening
			or closing of the menu, providing a smooth interface. That homepage won
			internal & external awards that year and performed exceptionally better
			at conversion than expected.
		</p>

	</div>

</div>
