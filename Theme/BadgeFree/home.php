<?php echo ipView('_header.php')->render(); ?>
	
		<section>
		<article>
        <div class="slider">
            <div class="container">
            <?php $options = array( 'id' => 'Badgeslide1','width' => '960','default' => ipThemeUrl('images/slider1.jpg'), 'class' => 'slide' ); echo ipSlot('image', $options); ?>	
            </div>
        </div>
		</article>
		<article>
        <!-- Site Description -->
        <div class="presentation container">
			<?php echo ipSlot('text', array('id' => 'Badgewelcom', 'tag' => 'h2', 'default' => __('Welcome', 'BadgePro', false), 'class' => 'center')); ?>
            <?php echo ipSlot('text', array('id' => 'Badgewelcometext', 'tag' => 'div', 'default' => __('sample text', 'BadgePro', false), 'class' => 'center')); ?>
        </div>
		</article>
		<article>
        <!-- Services -->
        <div class="what-we-do container">
            <div class="row">
                <div class="service span3">
					<?php $options = array( 'id' => 'Badgeboximg1','width' => '48','default' => ipThemeUrl('images/1.png'), 'class' => 'iconimg' ); echo ipSlot('image', $options); ?>
					<?php echo ipSlot('text', array('id' => 'Badgetitle1', 'tag' => 'h4', 'default' => __('About', 'BadgePro', false), 'class' => 'center')); ?>
					<?php echo ipSlot('text', array('id' => 'Badgeboxtext1', 'tag' => 'div', 'default' => __('sample text', 'BadgePro', false), 'class' => 'center')); ?>
                </div>
                <div class="service span3">
                    <?php $options = array( 'id' => 'Badgeboximg2','width' => '48','default' => ipThemeUrl('images/2.png'), 'class' => 'iconimg' ); echo ipSlot('image', $options); ?>
					<?php echo ipSlot('text', array('id' => 'Badgetitle2', 'tag' => 'h4', 'default' => __('Services', 'BadgePro', false), 'class' => 'center')); ?>
					<?php echo ipSlot('text', array('id' => 'Badgeboxtext2', 'tag' => 'div', 'default' => __('sample text', 'BadgePro', false), 'class' => 'center')); ?>
                </div>
                <div class="service span3">
                    <?php $options = array( 'id' => 'Badgeboximg3','width' => '48','default' => ipThemeUrl('images/4.png'), 'class' => 'iconimg' ); echo ipSlot('image', $options); ?>
                    <?php echo ipSlot('text', array('id' => 'Badgetitle3', 'tag' => 'h4', 'default' => __('Progets', 'BadgePro', false), 'class' => 'center')); ?>
					<?php echo ipSlot('text', array('id' => 'Badgeboxtext3', 'tag' => 'div', 'default' => __('sample text', 'BadgePro', false), 'class' => 'center')); ?>
                </div>
                <div class="service span3">
                    <?php $options = array( 'id' => 'Badgeboximg4','width' => '48','default' => ipThemeUrl('images/3.png'), 'class' => 'iconimg' ); echo ipSlot('image', $options); ?>
                    <?php echo ipSlot('text', array('id' => 'Badgetitle4', 'tag' => 'h4', 'default' => __('Contact', 'BadgePro', false), 'class' => 'center')); ?>
					<?php echo ipSlot('text', array('id' => 'Badgeboxtext4', 'tag' => 'div', 'default' => __('sample text', 'BadgePro', false), 'class' => 'center')); ?>
                </div>
            </div>
        </div>		
		</article>
		<article>
        <!-- Who -->
        <div class="who container">
            <div class="who-title">
				<?php echo ipSlot('text', array('id' => 'BadgeWho', 'tag' => 'h3', 'default' => __('Who, What and Why?', 'BadgePro', false), 'class' => 'center')); ?>
            </div>
            <div class="who">
				<?php echo ipSlot('text', array('id' => 'BadgeWhotext', 'tag' => 'span', 'default' => __('long text', 'BadgePro', false), 'class' => 'center')); ?>
            </div>			
		</div>		
		</article>
		<article>
        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
				<?php echo ipSlot('text', array('id' => 'BadgeWork', 'tag' => 'h3', 'default' => __('Our Latest Work', 'BadgePro', false), 'class' => 'center')); ?>
            </div>
            <div class="row">
                <div class="work span3">
					<?php $options = array( 'id' => 'Badgeworkimg1','width' => '270','default' => ipThemeUrl('images/work1.jpg'), 'class' => 'workimg' ); echo ipSlot('image', $options); ?>
					<?php echo ipSlot('text', array('id' => 'BadgeWorktitle1', 'tag' => 'h4', 'default' => __('Sample Title 1', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('home1')->asStatic()->render(); ?>
                </div>
                <div class="work span3">
                    <?php $options = array( 'id' => 'Badgeworkimg2','width' => '270','default' => ipThemeUrl('images/work2.jpg'), 'class' => 'workimg' ); echo ipSlot('image', $options); ?>
                    <?php echo ipSlot('text', array('id' => 'BadgeWorktitle2', 'tag' => 'h4', 'default' => __('Sample Title 2', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('home2')->asStatic()->render(); ?>
                </div>
                <div class="work span3">
                    <?php $options = array( 'id' => 'Badgeworkimg3','width' => '270','default' => ipThemeUrl('images/work3.jpg'), 'class' => 'workimg' ); echo ipSlot('image', $options); ?>
                    <?php echo ipSlot('text', array('id' => 'BadgeWorktitle3', 'tag' => 'h4', 'default' => __('Sample Title 3', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('home3')->asStatic()->render(); ?>
                </div>
                <div class="work span3">
                    <?php $options = array( 'id' => 'Badgeworkimg4','width' => '270','default' => ipThemeUrl('images/work4.jpg'), 'class' => 'workimg' ); echo ipSlot('image', $options); ?>
                    <?php echo ipSlot('text', array('id' => 'BadgeWorktitle4', 'tag' => 'h4', 'default' => __('Sample Title 4', 'BadgePro', false), 'class' => 'center')); ?>
                    <?php echo ipBlock('home4')->asStatic()->render(); ?>
                </div>
            </div>
        </div>	
		</article>
		<article>
        <!-- Testimonials -->
        <div class="who container">
            <div class="who-title">
				<?php echo ipSlot('text', array('id' => 'BadgeTestimonials', 'tag' => 'h3', 'default' => __('Testimonials', 'BadgePro', false), 'class' => 'center')); ?>
            </div>
            <div class="who">
				<?php echo ipBlock('testimonial')->asStatic()->render(); ?>
            </div>			
		</div>		
		</article>				
		
		<!-- Search -->
		<div class="mainpage container"><div class="border"></div>	
			<?php echo ipBlock('main')->render(); ?>
			<br>
		</div>
		
		</section>

<?php echo ipView('_footer.php')->render(); ?>	
