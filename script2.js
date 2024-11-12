// Function to toggle between sections with smooth animation
function showSection(sectionId) {
    // Hide all sections
    document.querySelectorAll('.content-section').forEach(section => {
        section.classList.remove('active');
        section.classList.add('d-none');
    });

    // Show selected section
    const sectionToShow = document.getElementById(sectionId);
    sectionToShow.classList.remove('d-none');
    setTimeout(() => {
        sectionToShow.classList.add('active');
    }, 10);
}
