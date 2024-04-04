<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .containerr {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-top: 20px;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%234CAF50" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-position: right 10px top 50%;
            background-repeat: no-repeat;
            padding-right: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        button:active {
            transform: translateY(2px);
        }
        .image-section {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .image-upload-button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .image-upload-button:hover {
            background-color: #45a049;
        }
        .image-upload-button:active {
            transform: translateY(2px);
        }
        .image-preview-container {
    display: flex;
    flex-wrap: nowrap; /* Prevent wrapping */
    overflow-x: auto; /* Enable horizontal scrolling if needed */
    margin-bottom: 10px; /* Add margin below the images */
}

.image-preview-container img {
    max-width: 100px; /* Adjust maximum width of images */
    height: auto; /* Maintain aspect ratio */
    margin-right: 10px; /* Add spacing between images */
}

    </style>
    <title>Vendor - Dashboard</title>
</head>
<body>
    @include('vendor.layout.header-nav')

    <div class="containerr">
        <h3 style="color: #45a049"> List Your Product with Details</h3>
        <form>
            <fieldset>
                <legend style="color: #45a049">Title</legend>
                <label for="brand">Brand:</label>
                <input type="text" id="brand" value="" placeholder="Brand Name" >
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Product Discription :</label>
                    <textarea class="form-control" style="height: 200px" id="exampleFormControlTextarea1" rows="3" placeholder="typing......"></textarea>
                  </div>
                <label for="collection">Collection:</label>
                <input type="text" id="collection" value="" placeholder="Collection">
                <label for="category">Category:</label>
                <select id="category" required>
                    <option value="">Select Category</option>
                    <option value="Men">Men</option>
                    <option value="Women">Women</option>
                    <option value="Bag">Bag</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Watches">Watches</option>
                </select>
            </fieldset>

            <fieldset>
                <legend style="color: #45a049">Product Details</legend>
                <label for="price">Regular price:</label>
                <input type="text" id="price" value="" placeholder="$" >
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" value="" placeholder="no#" >
                <label for="sku">SKU:</label>
                <input type="text" id="sku" value="" placeholder="Stock Keeping Units" >
                <label for="size">Size:</label>
                <select id="size">
                    <option value="">Select Size</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
            </fieldset>


            <div class="image-section">
                <legend style="color: #45a049">Image Upload</legend>
                <label for="image-upload" class="image-upload-button">Select Images</label>
                <input type="file" id="image-upload" multiple style="display: none;">
                <div id="image-preview" class="image-preview-container"></div>
                <!-- Images will be displayed here -->
            </div>


            <div style="display: flex; justify-content: flex-end;">
                <button type="button" style="margin-top: 20px; margin-left: 10px;">Cancel</button>
                <button type="submit" style="margin-top: 20px; margin-left: 10px;">Save</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Size</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- Records will be displayed here -->
            </tbody>
        </table>
    </div>
    <script>

document.getElementById('image-upload').addEventListener('change', function(event) {
    const MAX_IMAGES = 4; // Maximum number of images allowed
    const previewContainer = document.getElementById('image-preview');
    previewContainer.innerHTML = ''; // Clear previous images

    const files = event.target.files;
    if (files.length > MAX_IMAGES) {
        alert(`Please select a maximum of ${MAX_IMAGES} images.`);
        return;
    }

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = new Image();
            img.src = e.target.result;
            img.style.maxWidth = '15%'; // Adjust image width
            previewContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
    }

    // Show save and cancel buttons
    document.querySelectorAll('button[type="submit"], button[type="button"]').forEach(function(button) {
        button.style.display = 'block';
    });
});


    </script>
</body>
</html>

