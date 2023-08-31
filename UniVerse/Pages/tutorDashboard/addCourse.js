// Handle add section
// Handle add section
let addSection = document.getElementById('addSectionBtn');
let lessonsContainer = document.getElementById('accordion_lessons');

addSection.addEventListener('click', () => {
    let sectionText = document.getElementById('addCourseSection').value;

    if (sectionText.trim() !== '') {
        // Create new card elements
        let newCard = document.createElement('div');
        newCard.classList.add('card');

        let cardHeader = document.createElement('div');
        cardHeader.classList.add('card-header');
        cardHeader.setAttribute('role', 'tab');
        cardHeader.setAttribute('id', 'heading_' + sectionText);

        let cardTitle = document.createElement('h5');
        cardTitle.classList.add('mb-0');

        let collapseLink = document.createElement('a');
        collapseLink.setAttribute('data-toggle', 'collapse');
        collapseLink.setAttribute('href', '#collapse_' + sectionText);
        collapseLink.setAttribute('aria-expanded', 'true');
        collapseLink.setAttribute('aria-controls', 'collapse_' + sectionText);
        collapseLink.innerHTML = '<i class="fa-solid fa-plus"></i> ' + sectionText;

        // Construct the card structure
        cardTitle.appendChild(collapseLink);
        cardHeader.appendChild(cardTitle);
        newCard.appendChild(cardHeader);

        let collapseDiv = document.createElement('div');
        collapseDiv.classList.add('collapse');
        collapseDiv.setAttribute('id', 'collapse_' + sectionText);
        collapseDiv.setAttribute('role', 'tabpanel');
        collapseDiv.setAttribute('aria-labelledby', 'heading_' + sectionText);
        collapseDiv.setAttribute('data-parent', '#accordion_lessons');

        let cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        // Here you can add content to the card body if needed

        collapseDiv.appendChild(cardBody);
        newCard.appendChild(collapseDiv);

        // Append the new card to the lessons container
        lessonsContainer.appendChild(newCard);

        // Clear the input field
        document.getElementById('addCourseSection').value = '';
    }
});

// Start Handle changing the course image

let changePictureButton = document.getElementById('coursePicture');
let courseImage = document.querySelector('.course-image');

changePictureButton.onchange = () => {
    if (changePictureButton.files && changePictureButton.files[0]) {
        let reader = new FileReader();

        reader.onload = (e) => {
            courseImage.src = e.target.result;
        };

        reader.readAsDataURL(changePictureButton.files[0]);
    }
};

// End Handle changing the course image

// Start handle add video/file button

let addVideoBtn = document.getElementById('addVideo');
let addFileBtn = document.getElementById('addFile');

addVideoBtn.onclick = () => {
    Swal.fire({
        title: 'Add a video',
        html: `<form class="videoForm">
          <input id="username-input" class="swal2-input" placeholder="Video title" required>
          <label for="file-input" class="custom-file-input" style="display:block">
            Choose a video
            <input id="file-input" type="file" class="hidden" required>
        </label>
        <button type="submit" class="saveVideo">Save</button>
        </form>
        `,
        showCancelButton: false,
        showLoaderOnConfirm: true,
        showConfirmButton: false, // Remove the "Ok" button
        allowOutsideClick: () => !Swal.isLoading(),
    });
}

addFileBtn.onclick = () => {
    Swal.fire({
        title: 'Add a File',
        html: `<form class="videoForm">
          <input id="username-input" class="swal2-input" placeholder="File name" required>
          <label for="file-input" class="custom-file-input" style="display:block">
            Choose a file
            <input id="file-input" type="file" class="hidden" required>
        </label>
        <button type="submit" class="saveVideo">Save</button>
        </form>
        `,
        showCancelButton: false,
        showLoaderOnConfirm: true,
        showConfirmButton: false, // Remove the "Ok" button
        allowOutsideClick: () => !Swal.isLoading(),
    });
}

// Endhandle add video/file button

