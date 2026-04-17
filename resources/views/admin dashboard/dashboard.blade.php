extends('layouts.admin.app')

<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <script>
        // Load theme immediately to prevent flash
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'dark';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/templatemo-crypto-style.css">
    <link rel="stylesheet" href="css/templatemo-crypto-dashboard.css">
    <!--

TemplateMo 609 Crypto Vault

https://templatemo.com/tm-609-crypto-vault

-->
</head>
<body>
    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="logo">
                <div class="logo-icon">CV</div>
                <span class="logo-text">CryptoVault</span>
            </div>

            <nav class="nav-section">
                <div class="nav-label">Main Menu</div>
                <a href="index.html" class="nav-item active">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7" rx="1"/>
                        <rect x="14" y="3" width="7" height="7" rx="1"/>
                        <rect x="3" y="14" width="7" height="7" rx="1"/>
                        <rect x="14" y="14" width="7" height="7" rx="1"/>
                    </svg>
                    Dashboard
                </a>
                <a href="markets.html" class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    Admin
                </a>
                <a href="wallet.html" class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                        <line x1="1" y1="10" x2="23" y2="10"/>
                    </svg>
                    Dokter
                </a>

                <a href="transactions.html" class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1v22M1 12h22"/>
                    </svg>
                    Poli
                </a>

                    <a href="transactions.html" class="nav-item">
                    <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1v22M1 12h22"/>
                    </svg>
                    Antrian
                </a>
            </nav>



            <div class="sidebar-footer">
                <button class="logout-btn" onclick="window.location.href='login.html'">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"/>
                        <polyline points="16 17 21 12 16 7"/>
                        <line x1="21" y1="12" x2="9" y2="12"/>
                    </svg>
                    Logout
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="header-left">
                    <h1>Dashboard</h1>
                    <p class="header-subtitle">Welcome back! Here's your portfolio overview.</p>
                </div>
                <div class="header-right">
                    <div class="user-menu">
                        <div class="user-avatar">AM</div>
                        <div class="user-info">
                            <span class="user-name">Alex Morgan</span>
                            <span class="user-role">Pro Trader</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Wrapper -->
            <div class="content-wrapper">
                <!-- Left Column -->
                <div class="content-left">
                    <!-- Charts Grid -->
                    <div class="charts-grid">
                        <!-- Portfolio Overview -->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h2 class="card-title">Portfolio Overview</h2>
                                <div class="chart-tabs">
                                    <button class="chart-tab active">1D</button>
                                    <button class="chart-tab">1W</button>
                                    <button class="chart-tab">1M</button>
                                    <button class="chart-tab">1Y</button>
                                </div>
                            </div>
                            <div class="chart-container">
                                <svg class="line-chart" viewBox="0 0 700 200" preserveAspectRatio="xMidYMid meet">
                                    <defs>
                                        <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:#b87333"/>
                                            <stop offset="50%" style="stop-color:#c9845a"/>
                                            <stop offset="100%" style="stop-color:#daa57a"/>
                                        </linearGradient>
                                        <linearGradient id="areaGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#b87333;stop-opacity:0.4"/>
                                            <stop offset="50%" style="stop-color:#b87333;stop-opacity:0.15"/>
                                            <stop offset="100%" style="stop-color:#b87333;stop-opacity:0"/>
                                        </linearGradient>
                                    </defs>
                                    <!-- Grid Lines -->
                                    <line x1="0" y1="40" x2="700" y2="40" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="80" x2="700" y2="80" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="120" x2="700" y2="120" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="160" x2="700" y2="160" stroke="var(--chart-grid)" stroke-width="1"/>
                                    
                                    <!-- Area Fill -->
                                    <polygon points="50,140 150,120 250,85 350,95 450,60 550,70 650,35 650,200 50,200" fill="url(#areaGradient)"/>
                                    
                                    <!-- Line -->
                                    <polyline points="50,140 150,120 250,85 350,95 450,60 550,70 650,35" fill="none" stroke="url(#lineGradient)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                    
                                    <!-- Dots -->
                                    <circle cx="50" cy="140" r="5" fill="#b87333"/>
                                    <circle cx="150" cy="120" r="5" fill="#b87333"/>
                                    <circle cx="250" cy="85" r="5" fill="#b87333"/>
                                    <circle cx="350" cy="95" r="5" fill="#b87333"/>
                                    <circle cx="450" cy="60" r="5" fill="#b87333"/>
                                    <circle cx="550" cy="70" r="5" fill="#b87333"/>
                                    <circle cx="650" cy="35" r="5" fill="#b87333"/>
                                </svg>
                                <div class="chart-labels">
                                    <span>Mon</span>
                                    <span>Tue</span>
                                    <span>Wed</span>
                                    <span>Thu</span>
                                    <span>Fri</span>
                                    <span>Sat</span>
                                    <span>Sun</span>
                                </div>
                            </div>
                        </div>

                        <!-- Asset Performance -->
                        <div class="card chart-card">
                            <div class="card-header">
                                <h2 class="card-title">Asset Performance</h2>
                                <div class="chart-tabs">
                                    <button class="chart-tab active">Week</button>
                                    <button class="chart-tab">Month</button>
                                    <button class="chart-tab">Year</button>
                                </div>
                            </div>
                            <div class="chart-container">
                                <svg class="bar-chart" viewBox="0 0 700 200" preserveAspectRatio="xMidYMid meet">
                                    <defs>
                                        <linearGradient id="barGradient1" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#6b8e6b"/>
                                            <stop offset="100%" style="stop-color:#5a7a5a"/>
                                        </linearGradient>
                                        <linearGradient id="barGradient2" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#b87333"/>
                                            <stop offset="100%" style="stop-color:#9a5f2a"/>
                                        </linearGradient>
                                        <linearGradient id="barGradient3" x1="0%" y1="0%" x2="0%" y2="100%">
                                            <stop offset="0%" style="stop-color:#c27878"/>
                                            <stop offset="100%" style="stop-color:#a85f5f"/>
                                        </linearGradient>
                                    </defs>
                                    <!-- Grid Lines -->
                                    <line x1="0" y1="40" x2="700" y2="40" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="80" x2="700" y2="80" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="120" x2="700" y2="120" stroke="var(--chart-grid)" stroke-width="1"/>
                                    <line x1="0" y1="160" x2="700" y2="160" stroke="var(--chart-grid)" stroke-width="1"/>
                                    
                                    <!-- Bars - BTC -->
                                    <rect x="40" y="70" width="60" height="130" rx="4" fill="url(#barGradient1)"/>
                                    <text x="70" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">BTC</text>
                                    <text x="70" y="60" text-anchor="middle" fill="var(--gain)" font-size="13" font-weight="600">+8.2%</text>
                                    
                                    <!-- Bars - ETH -->
                                    <rect x="130" y="90" width="60" height="110" rx="4" fill="url(#barGradient1)"/>
                                    <text x="160" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">ETH</text>
                                    <text x="160" y="80" text-anchor="middle" fill="var(--gain)" font-size="13" font-weight="600">+6.5%</text>
                                    
                                    <!-- Bars - USDT -->
                                    <rect x="220" y="170" width="60" height="30" rx="4" fill="url(#barGradient2)"/>
                                    <text x="250" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">USDT</text>
                                    <text x="250" y="160" text-anchor="middle" fill="var(--text-secondary)" font-size="13" font-weight="600">+0.1%</text>
                                    
                                    <!-- Bars - SOL -->
                                    <rect x="310" y="50" width="60" height="150" rx="4" fill="url(#barGradient1)"/>
                                    <text x="340" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">SOL</text>
                                    <text x="340" y="40" text-anchor="middle" fill="var(--gain)" font-size="13" font-weight="600">+12.4%</text>
                                    
                                    <!-- Bars - BNB -->
                                    <rect x="400" y="130" width="60" height="70" rx="4" fill="url(#barGradient2)"/>
                                    <text x="430" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">BNB</text>
                                    <text x="430" y="120" text-anchor="middle" fill="var(--text-secondary)" font-size="13" font-weight="600">+2.8%</text>
                                    
                                    <!-- Bars - ADA -->
                                    <rect x="490" y="140" width="60" height="60" rx="4" fill="url(#barGradient2)"/>
                                    <text x="520" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">ADA</text>
                                    <text x="520" y="130" text-anchor="middle" fill="var(--text-secondary)" font-size="13" font-weight="600">+1.9%</text>
                                    
                                    <!-- Bars - XRP -->
                                    <rect x="580" y="150" width="60" height="50" rx="4" fill="url(#barGradient3)"/>
                                    <text x="610" y="190" text-anchor="middle" fill="var(--text-secondary)" font-size="12">XRP</text>
                                    <text x="610" y="140" text-anchor="middle" fill="var(--loss)" font-size="13" font-weight="600">-1.2%</text>
                                    
                                    <!-- Baseline -->
                                    <line x1="0" y1="200" x2="700" y2="200" stroke="var(--border)" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>
  
                    </div>

                    <!-- Bottom Row -->
                    <div class="bottom-row">

                       
                    </div>
                </div>

                <!-- Right Column - Stats -->
                <div class="content-right">
                    <div class="stat-card primary">
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <line x1="12" y1="1" x2="12" y2="23"/>
                                <path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-label">Total Balance</div>
                            <div class="stat-value">$84,254.32</div>
                            <div class="stat-change positive">+12.5% this month</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/>
                                <polyline points="17 6 23 6 23 12"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-label">Total Profit</div>
                            <div class="stat-value">$12,847.00</div>
                            <div class="stat-change positive">+8.2% vs last week</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-label">Pending Orders</div>
                            <div class="stat-value">7</div>
                            <div class="stat-change">3 buy, 4 sell</div>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                <path d="M2 17l10 5 10-5"/>
                                <path d="M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-label">Active Assets</div>
                            <div class="stat-value">12</div>
                            <div class="stat-change">Across 4 wallets</div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Copyright -->
            <footer class="copyright">
                Copyright &copy; 2026 CryptoVault. Designed by <a href="https://templatemo.com" target="_blank" rel="nofollow">TemplateMo</a>
            </footer>
        </main>
    </div>

    <script src="js/templatemo-crypto-script.js"></script>
</body>
</html>
