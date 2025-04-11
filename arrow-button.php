<style>

.arrow-buttons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            z-index: 2; /* Ensure it's on top of other elements */
        }

        .arrow-button {
            /* background-color: #2E86DE; */
            background-color: #343a40eb;
            border: 1px solid #ccc !important;
            color: #fff;
            font-size: 30px;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .arrow-button:hover {
            background-color: #343a40a8;
            color: #fff;
            border: 2px solid #333;
        }

/* Mobile Response */
@media screen and (max-width: 600px) {
    .arrow-button {
    background-color: #2E86DE;
    color: #fff;
    font-size: 25px;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

}
@media screen and (max-width: 912px) {
    .arrow-button {
    background-color: #2E86DE;
    color: #fff;
    font-size: 25px;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    margin: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
}

</style>


<div class="container">
        <div class="row ">
            <div class="arrow-buttons">
                <button class="arrow-button" id="scrollUpButton" onclick="scrollToTop()">&#8679;</button>
                <button class="arrow-button" id="scrollDownButton" onclick="scrollToBottom()">&#8681;</button>
            </div>
        </div>
    </div>

    <script>
                function scrollToTop() {
            window.scrollTo(0, 0);
        }

        function scrollToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }
        </script>