<!-- Main Banner Section -->
<section class="main-banner">
    <div class="banner-content">
        <div class="banner-grid">
            <!-- Text Content -->
            <div class="banner-text">
                <p class="banner-subtitle">Welcome to PresUniv Library</p>
                <h1 class="banner-title">
                    <span class="gradient-text">Discover Your</span><br>
                    Next Adventure
                </h1>
                <p class="banner-description">
                    Explore over 50,000 curated books across 20+ categories. 
                    Dive into worlds of knowledge, inspiration, and imagination 
                    with our constantly growing digital collection.
                </p>
                

                <div class="banner-stats">
                    <div class="stat-item">
                        <svg class="stat-icon" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 17H5V7h3v10zm2 0h3V7h-3v10zm5 0h3V7h-3v10z"/></svg>
                        <div>
                            <span class="stat-number">50K+</span>
                            <span class="stat-label">Books</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <svg class="stat-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM8 17.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM12 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm4 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <div>
                            <span class="stat-number">25+</span>
                            <span class="stat-label">Categories</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Visual Content -->
            <div class="banner-visual">
                <div class="book-stack">
                    <!-- Working SVG Illustration -->
                    <svg class="banner-illustration" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M2 10v44a2 2 0 002 2h44a2 2 0 002-2V10a2 2 0 00-2-2H4a2 2 0 00-2 2zm4 2h40v40H6V12zm46 0h6v40h-6V12z"/>
                        <path fill="currentColor" d="M12 18h24v4H12zm0 8h24v4H12zm0 8h24v4H12zm0 8h24v4H12z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --primary: #6a11cb;
    --secondary: #2575fc;
}

.main-banner {
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    border-radius: 24px;
    margin: 2rem 0;
    padding: 4rem 2rem;
    position: relative;
    overflow: hidden;
}

.banner-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
    position: relative;
    z-index: 1;
}

.banner-text {
    color: white;
}

.banner-subtitle {
    font-size: 1.2rem;
    letter-spacing: 0.1em;
    margin-bottom: 1rem;
    opacity: 0.9;
}

.banner-title {
    font-size: 3.5rem;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    font-weight: 700;
}

.banner-description {
    font-size: 1.2rem;
    line-height: 1.6;
    max-width: 85%;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.banner-actions {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.banner-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
}

.banner-btn.primary {
    background: white;
    color: var(--primary);
}

.banner-btn.secondary {
    border: 2px solid rgba(255,255,255,0.2);
    color: white;
    background: transparent;
}

.banner-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}

.banner-stats {
    display: flex;
    gap: 3rem;
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.stat-icon {
    width: 40px;
    height: 40px;
    color: white;
    opacity: 0.8;
}

.stat-number {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

.banner-visual {
    position: relative;
}

.book-stack {
    position: relative;
    max-width: 120%;
}

.banner-illustration {
    width: 100%;
    height: auto;
    filter: drop-shadow(0 20px 30px rgba(0,0,0,0.2));
    color: white;
}

@media (max-width: 768px) {
    .banner-grid {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .banner-actions {
        flex-direction: column;
    }
    
    .banner-stats {
        justify-content: center;
    }
    
    .book-stack {
        max-width: 80%;
        margin: 0 auto;
    }
}
</style>
<?php /**PATH /Users/madeprabawa/Desktop/Library_Project/resources/views/home/main_banner.blade.php ENDPATH**/ ?>