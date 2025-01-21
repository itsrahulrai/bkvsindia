/* ======= Retrieve the site URL from the meta tag ========== */
const siteUrl = document.querySelector('meta[name="site-url"]').getAttribute("content");

// Store selected categories
let selectedCategories = [];
let currentPage = 1; // Current page number
const pageSize = 10; // Number of courses per page

// Function to handle category checkbox changes
const handleCategoryChange = (e) => {
    const categoryId = e.target.id.replace('cat_', '');
    selectedCategories = e.target.checked
        ? [...selectedCategories, categoryId]
        : selectedCategories.filter(id => id !== categoryId);

    currentPage = 1; // Reset to the first page when filters change
    fetchCourses(); // Fetch filtered courses based on selected categories
};

// Attach event listeners to category checkboxes
document.querySelector('#Categories').addEventListener('change', handleCategoryChange);

/* ======= Fetch Courses with Pagination ========== */
const fetchCourses = async () => {
    try {
        const categoryQuery = selectedCategories.length ? `categories=${selectedCategories.join(',')}&` : '';
        const response = await fetch(`${siteUrl}/api/courses?${categoryQuery}page=${currentPage}&limit=${pageSize}`);
        const { courseCards, currentPage: serverPage, totalPages } = await response.json(); // Match backend keys

        const coursesContainer = document.querySelector('.courses__grid-wrap');
        coursesContainer.innerHTML = ''; // Clear previous results

        if (!courseCards || courseCards.length === 0) {
            // Display custom error message if no courses are available
            coursesContainer.innerHTML = `
                <div class="errorModule">
                    <div class="errorIcon">
                        <i class="fa fa-unlink"></i>
                    </div>
                    <div class="errorMsg">Oops! No courses found for the selected categories. Try Again</div>
                </div>
            `;
        } else {
            // Display courses if available
            coursesContainer.innerHTML = courseCards.join('');
        }

        // Update current page and render pagination controls
        currentPage = serverPage; // Update current page from server response
        renderPagination(totalPages);
    } catch (error) {
        console.warn(error.message || error);
        // Display generic error message if there's a fetch error
        const coursesContainer = document.querySelector('.courses__grid-wrap');
        coursesContainer.innerHTML = `
            <div class="errorModule">
                <div class="errorIcon">
                    <i class="fa fa-exclamation-triangle"></i>
                </div>
                <div class="errorMsg">Oops! Something went wrong. Try Again</div>
            </div>
        `;
    }
};

/* ======= Render Pagination Controls ========== */
const renderPagination = (totalPages) => {
    const paginationContainer = document.querySelector('.pagination-container');
    paginationContainer.innerHTML = ''; // Clear any previous pagination links

    if (totalPages <= 1) return; // Hide pagination if only one page

    const paginationList = document.createElement('ul');
    paginationList.classList.add('pagination');

    // "Previous" button
    const prevItem = document.createElement('li');
    prevItem.innerHTML = `<a href="#" class="${currentPage === 1 ? 'disabled' : ''}">←</a>`;
    prevItem.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage > 1) {
            currentPage--;
            fetchCourses();
        }
    });
    paginationList.appendChild(prevItem);

    // Page numbers
    for (let page = 1; page <= totalPages; page++) {
        const pageItem = document.createElement('li');
        pageItem.innerHTML = `<a href="#" class="${page === currentPage ? 'active' : ''}">${page}</a>`;
        pageItem.addEventListener('click', (e) => {
            e.preventDefault();
            if (currentPage !== page) {
                currentPage = page;
                fetchCourses();
            }
        });
        paginationList.appendChild(pageItem);
    }

    // "Next" button
    const nextItem = document.createElement('li');
    nextItem.innerHTML = `<a href="#" class="${currentPage === totalPages ? 'disabled' : ''}">→</a>`;
    nextItem.addEventListener('click', (e) => {
        e.preventDefault();
        if (currentPage < totalPages) {
            currentPage++;
            fetchCourses();
        }
    });
    paginationList.appendChild(nextItem);

    paginationContainer.appendChild(paginationList);
};

/* ======= Fetch Categories ========== */
let displayedCount = 0, batchSize = 4;

const fetchCategories = async () => {
    try {
        const response = await fetch(`${siteUrl}/api/categories`);
        const allCategories = await response.json();
        renderCategories(allCategories);
    } catch (error) {
        console.warn('Failed to fetch categories:', error?.message || error);
    }
};

const renderCategories = (allCategories) => {
    const categoriesContainer = document.querySelector('#Categories');
    const nextBatch = allCategories.slice(displayedCount, displayedCount + batchSize);
    
    nextBatch.forEach(({ id, name, child_count }) => {
        categoriesContainer.insertAdjacentHTML('beforeend', 
            `<li><div class="form-check"><input class="form-check-input" type="checkbox" id="cat_${id}">
            <label class="form-check-label" for="cat_${id}">${name} (${child_count})</label></div></li>`);
    });

    displayedCount += nextBatch.length;
    document.querySelector('#ShowMoreLink').style.display = displayedCount >= allCategories.length ? 'none' : 'block';
};

document.querySelector('#ShowMoreLink').addEventListener('click', (e) => {
    e.preventDefault();
    fetchCategories(); // Load next batch of categories when clicked
});

// Initial fetch
fetchCategories();
fetchCourses();
