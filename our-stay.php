<?php include 'include/header.php'; ?>
<style>
    .image-carousel-container {
        width: 400px;
        height: 250px;
        overflow: hidden;
        position: relative;
        margin: auto;
        border: 2px solid #444;
        border-radius: 10px;
    }

    .image-carousel-track {
        display: flex;
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .image-carousel-track img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .image-carousel-buttons {
        position: absolute;
        width: 100%;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        box-sizing: border-box;
    }

    .image-carousel-buttons button {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
    }

    .image-carousel-buttons button:hover {
        background-color: rgba(0, 0, 0, 0.9);
    }
</style>
<div class="row mx-auto mt-5">
    <div class="col-lg-12 Stay-section">
        <h1 class="text-center my-5">Our Stay</h1>
    </div>
</div>
<div class="container" style="margin: 0px;">
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="image-carousel-container">
                <div class="image-carousel-track" id="imageCarouselTrack">
                    <img src="assets/img/excel-rooms/1.jpg" alt="Image 1">
                    <img src="assets/img/excel-rooms/2.jpg" alt="Image 2">
                    <img src="assets/img/excel-rooms/3.jpg" alt="Image 3">
                    <img src="assets/img/excel-rooms/4.jpg" alt="Image 4">
                    <img src="assets/img/excel-rooms/5.jpg" alt="Image 5">
                </div>
                <div class="image-carousel-buttons">
                    <button onclick="prevImage()">❮</button>
                    <button onclick="nextImage()">❯</button>
                </div>
            </div>
            <div>
                <h1>Excel Rooms</h1>
            </div>
        </div>
        <div class="col-lg-6">

        </div>
    </div>
</div>
<script>
    const track = document.getElementById('imageCarouselTrack');
    const totalImages = track.children.length;
    let index = 0;

    function showImage(idx) {
        const offset = -idx * 400; // 400 = image width
        track.style.transform = `translateX(${offset}px)`;
    }

    function nextImage() {
        index = (index + 1) % totalImages;
        showImage(index);
    }

    function prevImage() {
        index = (index - 1 + totalImages) % totalImages;
        showImage(index);
    }
</script>

<?php include 'include/footer.php'; ?>