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
                    <h2>Mobile App Developer & Flutter Expert</h2>
                    <p>I create stunning, high-performance mobile applications for Android and cross-platform solutions. Specializing in Flutter development with a passion for clean code and exceptional user experiences.</p>
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
                                <span class="tech-item">Flutter</span>
                                <span class="tech-item">Android</span>
                                <span class="tech-item">Kotlin</span>
                                <span class="tech-item">Dart</span>
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
                            <span class="stat-number">9+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">5+</span>
                            <span class="stat-label">Years Mobile Focus</span>
                        </div>
                    </div>
                </div>
                <div class="about-text">
                    <h2>Senior Mobile Developer with 9 Years of Experience</h2>
                    <p>I'm a seasoned mobile app developer with nearly a decade of programming experience, specializing in Flutter and Android development. Over the years, I've evolved from web development to becoming a mobile-first expert, building high-performance, cross-platform applications that serve millions of users.</p>
                    <p>My journey spans 9 years of continuous learning and growth - from early web technologies to mastering modern mobile frameworks. I've witnessed the evolution of mobile development from native Android to the Flutter revolution, adapting and excelling at each stage of this incredible journey.</p>
                    <div class="about-highlights">
                        <div class="highlight-item">
                            <span class="highlight-icon">📱</span>
                            <span>Cross-Platform Mobile Apps</span>
                        </div>
                        <div class="highlight-item">
                            <span class="highlight-icon">🎨</span>
                            <span>Material Design & Cupertino UI</span>
                        </div>
                        <div class="highlight-item">
                            <span class="highlight-icon">⚡</span>
                            <span>High-Performance Flutter Apps</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Timeline Section -->
    <section class="experience-section">
        <div class="container">
            <h2 class="section-title">My Journey: 9 Years of Growth</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2015-2017</div>
                    <div class="timeline-content">
                        <h3>Web Development Foundation</h3>
                        <p>Started my programming journey with HTML, CSS, JavaScript, and PHP. Built my first websites and learned the fundamentals of software development.</p>
                        <div class="timeline-tech">
                            <span class="tech-tag">HTML/CSS</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2017-2019</div>
                    <div class="timeline-content">
                        <h3>Backend & Database Expertise</h3>
                        <p>Dived deep into backend development, working with Node.js, Python, and various databases. Gained experience in API development and system architecture.</p>
                        <div class="timeline-tech">
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">MongoDB</span>
                            <span class="tech-tag">PostgreSQL</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2019-2021</div>
                    <div class="timeline-content">
                        <h3>Mobile Development Beginnings</h3>
                        <p>Transitioned to mobile development, starting with native Android development using Java and Kotlin. Built my first mobile applications and learned mobile-specific patterns.</p>
                        <div class="timeline-tech">
                            <span class="tech-tag">Android</span>
                            <span class="tech-tag">Kotlin</span>
                            <span class="tech-tag">Java</span>
                            <span class="tech-tag">Material Design</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2021-2023</div>
                    <div class="timeline-content">
                        <h3>Flutter Mastery</h3>
                        <p>Embraced Flutter for cross-platform development, becoming proficient in Dart and building applications for both iOS and Android from a single codebase.</p>
                        <div class="timeline-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Dart</span>
                            <span class="tech-tag">Cross-platform</span>
                            <span class="tech-tag">Firebase</span>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2023-Present</div>
                    <div class="timeline-content">
                        <h3>Senior Mobile Developer</h3>
                        <p>Leading mobile development projects, mentoring junior developers, and architecting scalable mobile solutions. Specializing in performance optimization and modern mobile patterns.</p>
                        <div class="timeline-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Android</span>
                            <span class="tech-tag">Architecture</span>
                            <span class="tech-tag">CI/CD</span>
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project1.jpg" alt="Planingo.ai - AI Travel Planning Platform" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPk1vYmlsZSBBcHA8L3RleHQ+Cjwvc3ZnPg=='">
                        <div class="portfolio-overlay">
                            <a href="https://planingo.ai" class="portfolio-link" target="_blank">View App</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Planingo.ai - AI Travel Planning Platform</h3>
                        <p>An innovative AI-powered travel planning platform that simplifies trip organization with personalized itineraries, hotel bookings, and real-time recommendations. Built for solo travelers, groups, and digital nomads with eco-friendly options and seamless group coordination.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Flutter</span>
                            <span class="tag">Firebase</span>
                            <span class="tag">AI Integration</span>
                            <span class="tag">Travel Tech</span>
                        </div>
                        <div class="project-highlights">
                            <div class="highlight-item">
                                <span class="highlight-icon">🤖</span>
                                <span>AI-Powered Recommendations</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🌍</span>
                                <span>Eco-Friendly Travel Options</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">👥</span>
                                <span>Group Coordination Features</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project2.jpg" alt="Garden of Love - Global Community Platform" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPk1vYmlsZSBBcHA8L3RleHQ+Cjwvc3ZnPg=='">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View App</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>Garden of Love - Global Community Platform</h3>
                        <p>A comprehensive Flutter platform dedicated to creating global communities that promote humanity, animal welfare, and environmental supervision. Built with clean architecture, offline support, and advanced performance optimizations for a 12-person remote team.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Flutter</span>
                            <span class="tag">GetX</span>
                            <span class="tag">Clean Architecture</span>
                            <span class="tag">Firebase</span>
                        </div>
                        <div class="project-highlights">
                            <div class="highlight-item">
                                <span class="highlight-icon">⚡</span>
                                <span>Performance: Refactored 230+ Obx widgets to GetBuilder</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🏗️</span>
                                <span>Architecture: Built standalone networking SDK</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">👥</span>
                                <span>Team: Led 12-person remote development team</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/project3.jpg" alt="MyParsian Mobile - Fintech Banking App" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+Cjx0ZXh0IHg9IjIwMCIgeT0iMTUwIiBmb250LWZhbWlseT0iQXJpYWwiIGZvbnQtc2l6ZT0iMTgiIGZpbGw9IiM5OTk5OTkiIHRleHQtYW5jaG9yPSJtaWRkbGUiPk1vYmlsZSBBcHA8L3RleHQ+Cjwvc3ZnPg=='">
                        <div class="portfolio-overlay">
                            <a href="#" class="portfolio-link">View App</a>
                            <a href="#" class="portfolio-github">GitHub</a>
                        </div>
                    </div>
                    <div class="portfolio-content">
                        <h3>MyParsian Mobile - Fintech Banking App</h3>
                        <p>A comprehensive fintech banking application for Parsian Bank, serving 2M+ active users. Led technical strategy and architecture for a Flutter app that scaled from 200K to 2M users, featuring advanced Android integrations, Material 3 design, and robust testing with 85% code coverage.</p>
                        <div class="portfolio-tags">
                            <span class="tag">Flutter</span>
                            <span class="tag">Fintech</span>
                            <span class="tag">MVVM</span>
                            <span class="tag">TDD</span>
                        </div>
                        <div class="project-highlights">
                            <div class="highlight-item">
                                <span class="highlight-icon">📈</span>
                                <span>Scale: 200K → 2M+ users growth</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🧪</span>
                                <span>Testing: 400+ unit tests, 85% coverage</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-icon">🎨</span>
                                <span>UI: 110+ custom widgets, Material 3</span>
                            </div>
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
            <h2 class="section-title">Expertise Levels & Specializations</h2>
            <div class="expertise-grid">
                <div class="expertise-category">
                    <h3>Mobile Development (5+ Years)</h3>
                    <div class="skill-levels">
                        <div class="skill-level">
                            <span class="skill-name">Flutter</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%"></div>
                            </div>
                            <span class="skill-percentage">95%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">Android</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                            <span class="skill-percentage">90%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">Dart</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%"></div>
                            </div>
                            <span class="skill-percentage">95%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">Kotlin</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                            <span class="skill-percentage">85%</span>
                        </div>
                    </div>
                </div>
                <div class="expertise-category">
                    <h3>Backend Development (7+ Years)</h3>
                    <div class="skill-levels">
                        <div class="skill-level">
                            <span class="skill-name">Node.js</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 85%"></div>
                            </div>
                            <span class="skill-percentage">85%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">Python</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%"></div>
                            </div>
                            <span class="skill-percentage">80%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">Firebase</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                            <span class="skill-percentage">90%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">REST APIs</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                            <span class="skill-percentage">90%</span>
                        </div>
                    </div>
                </div>
                <div class="expertise-category">
                    <h3>Web Development (9+ Years)</h3>
                    <div class="skill-levels">
                        <div class="skill-level">
                            <span class="skill-name">JavaScript</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 90%"></div>
                            </div>
                            <span class="skill-percentage">90%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">React</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 80%"></div>
                            </div>
                            <span class="skill-percentage">80%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">HTML/CSS</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 95%"></div>
                            </div>
                            <span class="skill-percentage">95%</span>
                        </div>
                        <div class="skill-level">
                            <span class="skill-name">PHP</span>
                            <div class="skill-bar">
                                <div class="skill-progress" style="width: 75%"></div>
                            </div>
                            <span class="skill-percentage">75%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
                <div class="contact-content">
                <h2>Let's Build Amazing Mobile Apps Together</h2>
                <p>I'm always excited about new mobile app projects and opportunities. Let's discuss how we can create stunning, high-performance mobile applications that users will love!</p>
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
                    <a href="mailto:shahab@example.com" class="cta-button primary">Start Mobile Project</a>
                    <a href="#" class="cta-button secondary">View My Apps</a>
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
