/* ======= Retrieve the site URL from the meta tag ========== */
const siteUrl = document.querySelector('meta[name="site-url"]').getAttribute("content");

let selectedCategories = [];
let selectedSkillLevels = [];
let selectedPriceFilters = [];

let currentPage = 1; 
const pageSize = 10; 

/* ======= Function to handle price checkbox changes ========== */
const handlePriceChange = (e) => {
    const price = e.target.id; 
    selectedPriceFilters = e.target.checked
        ? [...selectedPriceFilters, price]
        : selectedPriceFilters.filter(priceFilter => priceFilter !== price);

    currentPage = 1;
    fetchCourses(); 
};

// Attach event listeners to price checkboxes
document.querySelector('#allprice').addEventListener('change', handlePriceChange); 
document.querySelector('#free').addEventListener('change', handlePriceChange); 
document.querySelector('#paid').addEventListener('change', handlePriceChange); 

/* ======= Handle Skill Level Changes ========== */

const handleSkillLevelChange = (e) => {
    const skillLevelId = e.target.id;
    selectedSkillLevels = e.target.checked
        ? [...selectedSkillLevels, skillLevelId]
        : selectedSkillLevels.filter(id => id !== skillLevelId);
    currentPage = 1;
    fetchCourses();
};

// Attach event listeners to skill level checkboxes
const skillLevelCheckboxes = document.querySelectorAll('.form-check-input');
skillLevelCheckboxes.forEach(checkbox => {
    checkbox.addEventListener('change', handleSkillLevelChange);
});

/* ======= Handle Category Changes ========== */
const handleCategoryChange = (e) => {
    const categoryId = e.target.id.replace('cat_', '');
    selectedCategories = e.target.checked
        ? [...selectedCategories, categoryId]
        : selectedCategories.filter(id => id !== categoryId);
    currentPage = 1;
    fetchCourses();
};

// Attach event listeners to category checkboxes
document.querySelector('#Categories').addEventListener('change', handleCategoryChange);

/* ======= Fetch Courses with Pagination ========== */
const fetchCourses = async () => {
    try {
        const categoryQuery = selectedCategories.length ? `categories=${selectedCategories.join(',')}&` : '';
        const skillLevelQuery = selectedSkillLevels.length ? `skill_levels=${selectedSkillLevels.join(',')}&` : '';
        const priceQuery = selectedPriceFilters.length ? `price=${selectedPriceFilters.join(',')}&` : ''; 
         
        const response = await fetch(`${siteUrl}/api/courses?${categoryQuery}${skillLevelQuery}${priceQuery}page=${currentPage}&limit=${pageSize}`);
        const { courseCards, currentPage: serverPage, totalPages,skillCounts } = await response.json();

        const coursesContainer = document.querySelector('.courses__grid-wrap');
        coursesContainer.innerHTML = ''; 

        if (!courseCards || courseCards.length === 0) {
            coursesContainer.innerHTML = `
                <div class="errorModule">
                    <div class="errorIcon">
                        <i class="fa fa-unlink"></i>
                    </div>
                    <div class="errorMsg">Oops! No courses found for the selected filters. Try Again</div>
                </div>
            `;
        } else {
            coursesContainer.innerHTML = courseCards.join('');
        }
        
        // Update skill level counts in the UI
        document.querySelector('#beginnerCount').innerText = `(${skillCounts.beginner})`;
        document.querySelector('#intermediateCount').innerText = `(${skillCounts.intermediate})`;
        document.querySelector('#highCount').innerText = `(${skillCounts.high})`;
        currentPage = serverPage;
        renderPagination(totalPages);
    } catch (error) {
        console.warn(error.message || error);
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
    paginationContainer.innerHTML = ''; 

    if (totalPages <= 1) return;
    const createPaginationItem = (text, isDisabled, onClick) => {
        const item = document.createElement('li');
        item.classList.toggle('disabled', isDisabled);
        item.innerHTML = `<a href="#">${text}</a>`;
        if (!isDisabled) item.addEventListener('click', onClick);
        return item;
    };
    const paginationWrap = document.createElement('nav');
    paginationWrap.classList.add('pagination__wrap', 'mt-30');
    const paginationList = document.createElement('ul');
    paginationList.classList.add('list-wrap');

    paginationList.appendChild(createPaginationItem('←', currentPage === 1, (e) => {
        e.preventDefault();
        if (currentPage > 1) { currentPage--; fetchCourses(); }
    }));

    for (let page = 1; page <= totalPages; page++) {
        paginationList.appendChild(createPaginationItem(page, page === currentPage, (e) => {
            e.preventDefault();
            if (currentPage !== page) { currentPage = page; fetchCourses(); }
        }));
    }
    paginationList.appendChild(createPaginationItem('→', currentPage === totalPages, (e) => {
        e.preventDefault();
        if (currentPage < totalPages) { currentPage++; fetchCourses(); }
    }));

    paginationWrap.appendChild(paginationList);
    paginationContainer.appendChild(paginationWrap);
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
    fetchCategories();
});






// Initial fetch
fetchCategories();
fetchCourses();




function printDiv(divId) {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}