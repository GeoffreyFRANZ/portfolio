document.getElementById('contact-form')?.addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const statusDiv = document.getElementById('form-status');
    const submitBtn = document.getElementById('submit-btn');
    const btnText = document.getElementById('btn-text');
    const btnIcon = document.getElementById('btn-icon');
    
    // État de chargement
    submitBtn.disabled = true;
    btnText.textContent = 'Transmission en cours...';
    btnIcon.textContent = 'sync';
    btnIcon.classList.add('animate-spin');
    btnIcon.classList.remove('animate-pulse');
    
    const formData = new FormData(form);
    
    try {
        const response = await fetch('../send_contact.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        statusDiv.classList.remove('hidden', 'bg-red-500/20', 'text-red-400', 'bg-green-500/20', 'text-green-400', 'border', 'border-red-500/50', 'border-green-500/50');
        
        if (result.status === 'success') {
            statusDiv.textContent = result.message;
            statusDiv.classList.add('bg-green-500/20', 'text-green-400', 'border', 'border-green-500/50');
            form.reset();
        } else {
            statusDiv.textContent = result.message;
            statusDiv.classList.add('bg-red-500/20', 'text-red-400', 'border', 'border-red-500/50');
        }
    } catch (error) {
        statusDiv.classList.remove('hidden');
        statusDiv.textContent = "Une erreur système critique est survenue lors de la transmission.";
        statusDiv.classList.add('bg-red-500/20', 'text-red-400', 'border', 'border-red-500/50');
    } finally {
        submitBtn.disabled = false;
        btnText.textContent = 'Transmettre le Message';
        btnIcon.textContent = 'send';
        btnIcon.classList.remove('animate-spin');
        btnIcon.classList.add('animate-pulse');
    }
});
