<?php
/**
 * The template for displaying the Submit a Quote page.
 * 
 * @package QOD_Starter_Theme
 * 
 */

get_header(); ?>

<div class='left-quote'><i class="fa fa-quote-left" aria-hidden="true"></i></div>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
    <section>
      <header>
        <?php the_title( '<h1 class-"entry-title">', '</h1>' ); ?>
      </header>

      <?php if(is_user_logged_in() && current_user_can( 'edit_posts' ) ): ?>

      <div class="quote-submission-wrapper">
      
      <form name="quoteForm" id="quote-submission-form" >

      <div>
        <label for="quote-author" class="submit-label">Author of Quote</label>
        <input type="text" name="quote_author" id="quote-author" class="submit-box">
      </div>

      <div>
        <label for="quote-content" class="submit-label">Quote</label>
        <textarea rows="3" cols="20" name="quote_content" id="quote-content" class="submit-box"></textarea>
      </div>

      <div>
        <label for="quote-source" class="submit-label">Quote Source</label>
        <input type="text" name="quote_source" id="quote-source" class="submit-box">
      </div>

      <div>
        <label for="quote-source-url" class="submit-label">Provide a url source of the quote</label>
        <input type="url" name="quote_source_url" id="quote-source-url" class="last-submit-box">
      </div>

      <button type="submit" id="submit-a-quote" value="Submit Quote" class="submit-quote-button">Submit Quote</button>
      
      </form>

      <p class="submit-sucess-message" style="display:none;"></p>
      
      </div>

      <?php else:  ?>

      <p>Sorry, you are not allowed to post.</p>

      <p><?php echo sprintf( '<a href="%1s">%2s</a>', esc_url( wp_login_url()) , 'Click here to login.' ); ?></p>

      <?php endif; ?>

    </section>

  </main>
</div>
<div class='right-quote'><i class="fa fa-quote-right" aria-hidden="true"></i></div>

<?php get_footer(); ?>