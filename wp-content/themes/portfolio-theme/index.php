<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <a href="<?php echo home_url(); ?>" class="site-title">
                <?php bloginfo('name'); ?>
            </a>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>
        </div>
    </div>
</header>

<main>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, I'm <span class="highlight">Shahab</span></h1>
                    <h2>Full-Stack Developer & UI/UX Designer</h2>
                    <p>I create beautiful, functional, and user-friendly web applications that make a difference. Passionate about clean code and innovative solutions.</p>
                    <div class="hero-buttons">
                        <a href="#portfolio" class="cta-button primary">View My Work</a>
                        <a href="#contact" class="cta-button secondary">Get In Touch</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="profile-card">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/profile.jpg" alt="Shahab - Developer" onerror="this.style.display='none'">
                        <div class="profile-overlay">
                            <div class="tech-stack">
                                <span class="tech-item">React</span>
                                <span class="tech-item">Node.js</span>
                                <span class="tech-item">Python</span>
                                <span class="tech-item">AWS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/profile.jpg" alt="Shahab - Developer" onerror="this.style.display='none'">
                    <div class="about-stats">
                        <div class="stat">
                            <span class="stat-number">3+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">100%</span>
                            <span class="stat-label">Client Satisfaction</span>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <h2>Passionate Developer & Problem Solver</h2>
                    <p>I'm a full-stack developer with a passion for creating innovative digital solutions. With expertise in modern web technologies, I specialize in building scalable applications that deliver exceptional user experiences.</p>
                    <p>My journey in tech started with curiosity and has evolved into a career focused on solving real-world problems through code. I love working with React, Node.js, Python, and cloud technologies to build applications that make a difference.</p>
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <span class="highlight-icon">🚀</span>
                            <span>Fast & Scalable Solutions</span>
                        </div>
                        <div class="highlight-item">
                            <span class="highlight-icon">🎨</span>
                            <span>Beautiful UI/UX Design</span>
                        </div>
                        <div class="highlight-item">
                            <span class="highlight-icon">🔧</span>
                            <span>Clean & Maintainable Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2 class="section-title">My Work</h2>
            <div class="portfolio-grid">
                <?php
                // Query for portfolio posts
                $portfolio_query = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 6,
                    'post_status' => 'publish'
                ));

                if ($portfolio_query->have_posts()) :
                    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                ?>
                <div class="portfolio-item">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <div class="portfolio-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <div class="portfolio-tags">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) :
                                foreach ($tags as $tag) :
                            ?>
                                <span class="tag"><?php echo $tag->name; ?></span>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project1.jpg" alt="E-Commerce Platform" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkV4YW1wbGUgUHJvamVjdDwvdGV4dD4KPC9zdmc+'">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>E-Commerce Platform</h3>
                        <p>A full-stack e-commerce solution built with React, Node.js, and MongoDB. Features include user authentication, payment processing, and admin dashboard.</p>
                        <div class="portfolio-tags">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                            <span class="tag">Stripe</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project2.jpg" alt="Task Management App" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkV4YW1wbGUgUHJvamVjdDwvdGV4dD4KPC9zdmc+'">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Task Management App</h3>
                        <p>A collaborative task management application with real-time updates, drag-and-drop functionality, and team collaboration features.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Vue.js</span>
                            <span class="tag">Socket.io</span>
                            <span class="tag">PostgreSQL</span>
                            <span class="tag">Docker</span>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project3.jpg" alt="Weather Dashboard" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPkV4YW1wbGUgUHJvamVjdDwvdGV4dD4KPC9zdmc+'">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View Project</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Weather Dashboard</h3>
                        <p>A responsive weather application with location-based forecasts, interactive maps, and detailed weather analytics.</p>
                        <div class="portfolio-tags">
                            <span class="tag">JavaScript</span>
                            <span class="tag">API</span>
                            <span class="tag">Charts.js</span>
                            <span class="tag">CSS3</span>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="container">
            <h2 class="section-title">Skills & Technologies</h2>
            <div class="skills-grid">
                <div class="skill-item">
                    <div class="skill-icon">💻</div>
                    <h3>Frontend Development</h3>
                    <p>HTML, CSS, JavaScript, React, Vue.js</p>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">⚙️</div>
                    <h3>Backend Development</h3>
                    <p>Node.js, Python, PHP, MySQL, MongoDB</p>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">📱</div>
                    <h3>Mobile Development</h3>
                    <p>React Native, Flutter, iOS, Android</p>
                </div>
                <div class="skill-item">
                    <div class="skill-icon">☁️</div>
                    <h3>Cloud & DevOps</h3>
                    <p>AWS, Docker, CI/CD, Linux</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="contact-content">
                <h2>Let's Work Together</h2>
                <p>I'm always interested in new opportunities and exciting projects. Let's discuss how we can bring your ideas to life!</p>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">📧</div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>shahab@example.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">📱</div>
                        <div class="contact-details">
                            <h3>Phone</h3>
                            <p>+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">🌐</div>
                        <div class="contact-details">
                            <h3>LinkedIn</h3>
                            <p>linkedin.com/in/shahab</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">💻</div>
                        <div class="contact-details">
                            <h3>GitHub</h3>
                            <p>github.com/shahab</p>
                        </div>
                    </div>
                </div>
                <div class="contact-cta">
                    <a href="mailto:shahab@example.com" class="cta-button primary">Send Message</a>
                    <a href="#" class="cta-button secondary">Download CV</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
