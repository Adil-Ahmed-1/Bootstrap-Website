<?php
require_once 'connection.php';
require_once 'require/library.php';
general::site_navbar();
general::site_header();
?>
<style>
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
}
</style>
<style>
.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}
</style>

<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary">📚 My Blog Posts</h2>
        <hr class="w-25 mx-auto border-primary border-3 rounded-pill">
    </div>

    <div class="row g-4">
        <?php
        $query = "SELECT * FROM posts"; 
        $result = mysqli_query($connection, $query);
        while ($post = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 h-100">
                    <?php if (!empty($post['image'])): ?>
                        <img src="uploads/<?php echo $post['image']; ?>" class="card-img-top rounded-top" style="height: 220px; object-fit: cover;" alt="Post Image">
                    <?php endif; ?>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-semibold text-primary">
                            <i class="bi bi-journal-text me-2"></i><?php echo $post['title']; ?>
                        </h5>
                        <p class="card-text text-muted small"><?php echo $post['summary']; ?></p>
                        <div class="mt-auto text-end">
                            <button class="btn btn-primary btn-sm rounded-pill px-4 shadow-sm" data-bs-toggle="modal" data-bs-target="#postModal<?php echo $post['id']; ?>">
                                Read More <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="postModal<?php echo $post['id']; ?>" tabindex="-1" aria-labelledby="postModalLabel<?php echo $post['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content border-0 shadow rounded-4">
                        <div class="modal-header bg-primary text-white rounded-top">
                            <h5 class="modal-title" id="postModalLabel<?php echo $post['id']; ?>">
                                <i class="bi bi-file-text me-2"></i><?php echo $post['title']; ?>
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php if (!empty($post['image'])): ?>
                                <img src="uploads/<?php echo $post['image']; ?>" class="img-fluid rounded mb-3" alt="Post Image">
                            <?php endif; ?>
                            <p class="text-secondary lh-lg"><?php echo nl2br($post['description']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
</div>

<?php
general::site_category();
general::site_footer();
// general::site_footer_scripts();
?>
