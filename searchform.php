<form class="recherche" method="get" action=" <?php echo get_home_url('/')?> ">
    <input type="text" class="recherche__input" name="s" value="<?php get_search_query(); ?>">
    <button class="recherche__bouton">
        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
            color="#000">
            <path fill-rule="evenodd"
                d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z">
            </path>
        </svg>
    </button>
</form>