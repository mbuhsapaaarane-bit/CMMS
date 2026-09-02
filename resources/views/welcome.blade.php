<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>CMMS - PT. Sumber Masanda Jaya</title>
<link rel="manifest" href="/manifest.webmanifest">
<link rel="icon" type="image/png" href="/icon.png">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<meta name="theme-color" content="#FF6B00">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="CMMS">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
:root{--o:#FF6B00;--os:#FFF4EB;--od:#D95A00;--bg:#F5F3F0;--w:#FFF;--t:#1A1A1A;--t2:#6B7280;--t3:#9CA3AF;--bd:#E8E5E0;--g:#16A34A;--gb:#ECFDF5;--y:#D97706;--yb:#FFFBEB;--r:#DC2626;--rb:#FEF2F2;--b:#2563EB;--bb:#EFF6FF}
*{box-sizing:border-box;margin:0;padding:0;-webkit-tap-highlight-color:transparent}
body{font-family:'Plus Jakarta Sans',sans-serif;background:#E8E5E0;color:var(--t);display:flex;justify-content:center;min-height:100vh}
.ph{width:100%;max-width:430px;height:100vh;height:100dvh;min-height:100vh;min-height:100dvh;background:var(--bg);position:relative;overflow:hidden;display:flex;flex-direction:column}
@media(min-width:500px){body{padding:16px 0;align-items:center}.ph{height:94vh;height:94dvh;min-height:94vh;min-height:94dvh;max-height:94vh;max-height:94dvh;border-radius:28px;box-shadow:0 20px 60px rgba(0,0,0,.12);border:6px solid #1A1A1A}}
.ls{position:fixed;inset:0;z-index:200;background:linear-gradient(160deg,#FF6B00 0%,#E65300 55%,#C2410C 100%);display:flex;flex-direction:column;align-items:center;justify-content:center;padding:24px;overflow:hidden}
.ls::before{content:'';position:absolute;width:360px;height:360px;border-radius:50%;background:radial-gradient(circle,rgba(255,255,255,.16) 0%,transparent 70%);top:-130px;right:-110px}
.ls::after{content:'';position:absolute;width:300px;height:300px;border-radius:50%;background:radial-gradient(circle,rgba(255,255,255,.10) 0%,transparent 70%);bottom:-120px;left:-100px}
.ls.hide{display:none}
.lc{position:relative;background:#fff;border-radius:24px;padding:34px 26px 26px;width:100%;max-width:360px;box-shadow:0 24px 70px rgba(90,35,0,.35);animation:lcIn .45s ease}
@keyframes lcIn{from{opacity:0;transform:translateY(18px) scale(.98)}to{opacity:1;transform:translateY(0) scale(1)}}
.llogo{width:64px;height:64px;border-radius:18px;background:linear-gradient(135deg,#FF6B00,#FF8C38);display:flex;align-items:center;justify-content:center;margin:0 auto 14px;box-shadow:0 10px 26px rgba(255,107,0,.4)}
.llogo i{font-size:26px;color:#fff}
.lh{font-size:22px;font-weight:800;text-align:center;letter-spacing:.5px}
.lp{font-size:12px;color:var(--t2);text-align:center;margin-top:4px;font-weight:600}
.ltag{font-size:10px;color:var(--t3);text-align:center;margin:6px 0 22px;letter-spacing:.4px}
.lf{margin-bottom:14px}
.ll{font-size:12px;font-weight:700;color:var(--t2);margin-bottom:6px;display:block}
.iwrap{position:relative}
.ico{position:absolute;left:15px;top:50%;transform:translateY(-50%);color:var(--t3);font-size:14px;pointer-events:none;z-index:1}
.iwrap .fi{padding-left:42px}
.fi{width:100%;padding:14px 16px;border-radius:12px;border:1.5px solid var(--bd);font-size:15px;font-family:inherit;color:var(--t);background:var(--w);outline:none;transition:border-color .15s}
.fi:focus{border-color:var(--o)}.fi::placeholder{color:var(--t3)}
select.fi{cursor:pointer;-webkit-appearance:none;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%236B7280' viewBox='0 0 16 16'%3E%3Cpath d='M8 11L3 6h10z'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center}
textarea.fi{resize:vertical;min-height:72px}
.lbtn{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;padding:16px;border-radius:14px;font-size:15px;font-weight:700;border:none;cursor:pointer;font-family:inherit;background:var(--o);color:#fff;margin-top:4px;transition:background .15s,transform .1s,box-shadow .15s;box-shadow:0 8px 20px rgba(255,107,0,.3)}
.lbtn:hover{background:var(--od)}
.lbtn:active{transform:scale(.97)}
.lbtn:disabled{opacity:.75;cursor:default;transform:none;box-shadow:none}
.lspin{display:none;width:16px;height:16px;border:2px solid rgba(255,255,255,.4);border-top-color:#fff;border-radius:50%;animation:lsp .7s linear infinite}
.lbtn.loading .lspin{display:inline-block}
@keyframes lsp{to{transform:rotate(360deg)}}
.lerr{color:var(--r);font-size:12px;font-weight:600;text-align:center;margin-top:10px;min-height:18px}
.lfoot{font-size:10px;color:var(--t3);text-align:center;margin-top:20px;letter-spacing:.3px}
.pwt{position:absolute;right:14px;top:50%;transform:translateY(-50%);background:none;border:none;color:var(--t3);cursor:pointer;font-size:14px;padding:4px}
.tb{background:var(--w);padding:14px 20px;display:flex;align-items:center;justify-content:space-between;border-bottom:1px solid var(--bd);flex-shrink:0;position:sticky;top:0;z-index:20}
.tb-t{font-size:17px;font-weight:800}
.rchip{display:flex;align-items:center;gap:6px;padding:6px 12px;border-radius:20px;background:var(--os);font-size:11px;font-weight:700;color:var(--od);cursor:pointer;border:none;font-family:inherit}
.ct{flex:1;overflow-y:auto;overflow-x:hidden;padding:16px;padding-bottom:100px;-webkit-overflow-scrolling:touch}
.bn{position:absolute;bottom:0;left:0;right:0;background:var(--w);border-top:1px solid var(--bd);display:flex;align-items:flex-end;padding:6px 6px env(safe-area-inset-bottom,10px);z-index:30;flex-shrink:0;box-shadow:0 -6px 20px rgba(0,0,0,.05)}
.bi{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:flex-end;gap:4px;padding:8px 2px 6px;cursor:pointer;color:var(--t3);border:none;background:none;font-family:inherit;font-size:10px;font-weight:600;transition:color .15s}
.bi i{font-size:20px;transition:transform .15s}.bi:active{color:var(--o)}.bi.ac{color:var(--o)}.bi.ac i{transform:translateY(-1px)}
.bc{width:54px;height:54px;border-radius:50%;background:linear-gradient(135deg,#FF6B00,#FF8C38);color:#fff;display:flex;align-items:center;justify-content:center;font-size:22px;border:4px solid var(--w);box-shadow:0 6px 18px rgba(255,107,0,.4);margin-top:-26px;cursor:pointer;transition:transform .12s,box-shadow .2s;flex-shrink:0}
.bc:active{transform:scale(.9)}
.cd{background:var(--w);border-radius:16px;padding:18px;margin-bottom:14px;border:1px solid var(--bd)}
.ct2{font-size:13px;font-weight:700;color:var(--t2);text-transform:uppercase;letter-spacing:.5px;margin-bottom:14px}
.sr{display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px;margin-bottom:14px}
.sb{background:var(--w);border-radius:14px;padding:14px 12px;text-align:center;border:1px solid var(--bd)}
.sn{font-size:26px;font-weight:800;line-height:1}.sl{font-size:10px;font-weight:600;color:var(--t2);margin-top:4px}
.hc{width:50px;height:50px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:800;flex-shrink:0;position:relative}
.hc::before{content:'';position:absolute;inset:4px;border-radius:50%;background:var(--w)}
.hc span{position:relative;z-index:1}
.bg{display:inline-flex;align-items:center;gap:4px;padding:4px 10px;border-radius:8px;font-size:11px;font-weight:700}
.bg-g{background:var(--gb);color:var(--g)}.bg-y{background:var(--yb);color:var(--y)}.bg-r{background:var(--rb);color:var(--r)}.bg-o{background:var(--os);color:var(--o)}.bg-b{background:var(--bb);color:var(--b)}
.mc{background:var(--w);border-radius:14px;padding:16px;margin-bottom:10px;border:1px solid var(--bd);cursor:pointer}
.mc:active{box-shadow:0 2px 12px rgba(0,0,0,.06)}
.mr{display:flex;align-items:center;gap:14px}
.mi{flex:1;min-width:0}
.mid{font-size:15px;font-weight:700}
.msub{font-size:12px;color:var(--t2);margin-top:2px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.mm{display:flex;gap:10px;margin-top:10px;font-size:11px;color:var(--t3);flex-wrap:wrap}
.mm i{margin-right:3px}
.donut-wrap{display:flex;align-items:center;gap:20px}
.donut{width:100px;height:100px;border-radius:50%;position:relative;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.donut::before{content:'';position:absolute;inset:16px;border-radius:50%;background:var(--w)}
.donut-c{position:relative;z-index:1;text-align:center}
.donut-c .dn{font-size:22px;font-weight:800;line-height:1}
.donut-c .dl{font-size:9px;color:var(--t3);font-weight:600}
.donut-leg{display:flex;flex-direction:column;gap:10px}
.donut-li{display:flex;align-items:center;gap:10px;font-size:13px;font-weight:600;color:var(--t2)}
.donut-dot{width:12px;height:12px;border-radius:4px;flex-shrink:0}
.dw{display:flex;align-items:flex-end;gap:4px;height:90px;padding-top:8px}
.dc{flex:1;display:flex;flex-direction:column;align-items:center;gap:3px}
.df{width:100%;border-radius:3px 3px 0 0;transition:height .4s ease;min-height:3px}
.dl{font-size:8px;color:var(--t3);font-weight:600}
.dv{font-size:9px;font-weight:700;color:var(--t2)}
.fg{margin-bottom:16px}
.chip-g{display:flex;flex-wrap:wrap;gap:8px}
.chip{padding:10px 14px;border-radius:12px;border:1.5px solid var(--bd);background:var(--w);font-size:13px;font-weight:600;color:var(--t2);cursor:pointer;font-family:inherit;display:inline-flex;align-items:center;gap:6px}
.chip:active{transform:scale(.96)}.chip.sel{border-color:var(--o);background:var(--os);color:var(--od)}
.sv-g{display:flex;gap:8px}
.sv-b{flex:1;padding:14px 8px;border-radius:12px;border:1.5px solid var(--bd);background:var(--w);text-align:center;cursor:pointer;font-family:inherit}
.sv-b .si{font-size:22px;margin-bottom:4px}.sv-b .sl{font-size:12px;font-weight:700}
.sv-b.sg{border-color:var(--g);background:var(--gb)}.sv-b.sg .si,.sv-b.sg .sl{color:var(--g)}
.sv-b.sy{border-color:var(--y);background:var(--yb)}.sv-b.sy .si,.sv-b.sy .sl{color:var(--y)}
.sv-b.svr{border-color:var(--r);background:var(--rb)}.sv-b.svr .si,.sv-b.svr .sl{color:var(--r)}
.btn{display:flex;align-items:center;justify-content:center;gap:8px;width:100%;padding:16px;border-radius:14px;font-size:15px;font-weight:700;border:none;cursor:pointer;font-family:inherit}
.btn:active{transform:scale(.97)}
.btn-o{background:var(--o);color:#fff}
.btn-w{background:var(--w);color:var(--t);border:1.5px solid var(--bd)}
.bsm{padding:10px 16px;font-size:13px;border-radius:10px;width:auto}
.btn-g{background:var(--g);color:#fff}
.brs{padding:8px 14px;border-radius:10px;font-size:12px;font-weight:700;border:none;background:var(--rb);color:var(--r);cursor:pointer;font-family:inherit}
.bxs{padding:6px 10px;font-size:11px;font-weight:700;border:none;border-radius:8px;cursor:pointer;font-family:inherit}
.qg{display:grid;grid-template-columns:1fr 1fr;gap:10px}
.qa{padding:16px 14px;border-radius:14px;border:1.5px solid var(--bd);background:var(--w);cursor:pointer;font-family:inherit;text-align:left}
.qa:active{transform:scale(.97);border-color:var(--o)}
.qa .qi{font-size:22px;margin-bottom:8px}.qa .ql{font-size:13px;font-weight:700}.qa .qs{font-size:10px;color:var(--t3);margin-top:2px}
.ug{background:var(--r);color:#fff;border-radius:14px;padding:14px 16px;margin-bottom:14px;display:flex;align-items:center;gap:12px}
.ug i{font-size:20px}.ug .un{font-size:24px;font-weight:800}.ug .ut{font-size:13px;font-weight:600;line-height:1.4}
.tk-a{background:var(--os);border:2px solid var(--o);border-radius:16px;padding:18px;margin-bottom:14px}
.ti{display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--bd)}
.ti:last-child{border-bottom:none}
.tm{width:42px;height:42px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0}
.ri{display:flex;gap:12px;padding:14px 0;border-bottom:1px solid var(--bd)}.ri:last-child{border-bottom:none}
.rd{width:10px;height:10px;border-radius:50%;background:var(--o);margin-top:5px;flex-shrink:0}
.ds-row{display:flex;gap:10px;margin-bottom:14px}
.ds-i{flex:1;text-align:center;padding:12px 8px;background:var(--bg);border-radius:12px}
.ds-v{font-size:20px;font-weight:800}.ds-l{font-size:9px;font-weight:700;color:var(--t3);text-transform:uppercase;margin-top:2px}
.ru{border-left:4px solid var(--r);background:var(--rb);border-radius:12px;padding:14px;margin-bottom:10px}
.ru-ok{border-left-color:var(--g);background:var(--gb);border-radius:12px;padding:14px;margin-bottom:10px}
.rl{display:flex;gap:12px;padding:14px;background:var(--bg);border-radius:12px;margin-bottom:8px;border-left:4px solid var(--o)}
.rl-if{font-size:12px;font-weight:700;color:var(--o)}.rl-then{font-size:13px;font-weight:700;margin-top:2px}
.rl-d{font-size:11px;color:var(--t2);margin-top:2px;line-height:1.4}
.prw{display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--bd);font-size:13px}
.prw:last-child{border-bottom:none}
.prl{color:var(--t3);font-size:12px;font-weight:600}
.prv{font-weight:700;display:flex;align-items:center;gap:8px}
.uc{display:flex;align-items:center;gap:14px;padding:14px 0;border-bottom:1px solid var(--bd)}
.uc:last-child{border-bottom:none}
.ua{width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:800;color:#fff;flex-shrink:0}
.pg{display:none}.pg.ac{display:block;animation:fu .2s ease}
@keyframes fu{from{opacity:0;transform:translateY(8px)}to{opacity:1;transform:translateY(0)}}
.mb{display:none;position:fixed;inset:0;z-index:50;background:rgba(0,0,0,.4);align-items:flex-end;justify-content:center}
.mb.sh{display:flex}
.ms{background:var(--w);border-radius:24px 24px 0 0;width:100%;max-width:430px;max-height:85vh;overflow-y:auto;animation:mu .25s ease;padding-bottom:env(safe-area-inset-bottom,16px)}
@keyframes mu{from{transform:translateY(100%)}to{transform:translateY(0)}}
.mh{width:36px;height:4px;border-radius:2px;background:var(--bd);margin:10px auto 0}
.mhd{padding:16px 20px 0;display:flex;align-items:center;justify-content:space-between}
.mt{font-size:17px;font-weight:800}
.mx{width:32px;height:32px;border-radius:50%;background:var(--bg);border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--t2);font-size:14px}
.mbd{padding:16px 20px 24px}
.tw{position:fixed;top:16px;left:50%;transform:translateX(-50%);z-index:300;width:90%;max-width:400px}
.to{padding:14px 18px;border-radius:14px;font-size:13px;font-weight:600;display:flex;align-items:center;gap:10px;box-shadow:0 8px 30px rgba(0,0,0,.15);animation:tu .25s ease;margin-bottom:8px}
.to-ok{background:#166534;color:#BBF7D0}.to-er{background:#7F1D1D;color:#FECACA}
@keyframes tu{from{opacity:0;transform:translateY(-16px)}to{opacity:1;transform:translateY(0)}}
.rr{display:flex;justify-content:space-between;align-items:center;padding:12px 0;border-bottom:1px solid var(--bd);font-size:13px}
.rr:last-child{border-bottom:none}
.lok-row{display:flex;align-items:center;justify-content:space-between;padding:12px 0;border-bottom:1px solid var(--bd)}
.lok-row:last-child{border-bottom:none}
.lok-icon{width:36px;height:36px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}.rem{display:flex;align-items:center;gap:12px;padding:12px 0;border-bottom:1px solid var(--bd)}.rem:last-child{border-bottom:none}.rem-i{width:38px;height:38px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:15px;flex-shrink:0}.ptd{display:flex;gap:10px;margin-top:8px;flex-wrap:wrap}.thum{width:64px;height:64px;border-radius:10px;object-fit:cover;border:1px solid var(--bd);cursor:pointer}.suk{display:flex;align-items:center;gap:12px;padding:14px 0;border-bottom:1px solid var(--bd)}.suk:last-child{border-bottom:none}.akt{display:flex;gap:12px;padding:12px 0;border-bottom:1px solid var(--bd)}.akt:last-child{border-bottom:none}.gr{display:flex;align-items:flex-end;gap:6px;height:110px;padding-top:8px}.bc2{flex:1;display:flex;flex-direction:column;align-items:center;gap:4px}
</style>
</head>
<body>
<div class="ls" id="loginScreen">
<div class="lc">
<div class="llogo"><i class="fas fa-wrench"></i></div>
<div class="lh">CMMS</div>
<div class="lp">PT. Sumber Masanda Jaya</div>
<div class="ltag">Computerized Maintenance Management System</div>
<div class="lf"><label class="ll">Username</label><div class="iwrap"><i class="fas fa-user ico"></i><input type="text" class="fi" id="lUser" placeholder="Masukkan username" autocomplete="username" autocapitalize="none" spellcheck="false"></div></div>
<div class="lf"><label class="ll">Password</label><div class="iwrap"><i class="fas fa-lock ico"></i><input type="password" class="fi" id="lPass" placeholder="Masukkan password" style="padding-right:44px" autocomplete="current-password"><button class="pwt" onclick="tglLP()" type="button" aria-label="Tampilkan password"><i class="fas fa-eye" id="lEye"></i></button></div></div>
<button class="lbtn" id="lBtn" onclick="doLogin()"><span class="lspin"></span><i class="fas fa-sign-in-alt" id="lBtnIc"></i><span id="lBtnTx">Masuk</span></button>
<div class="lerr" id="lErr"></div>
<div class="lfoot">© 2026 PT. Sumber Masanda Jaya</div>
</div>
</div>

<div class="ph" id="app" style="display:none">
<div class="tb"><div class="tb-t" id="topT">Beranda</div><button class="rchip" onclick="doLogout()"><i class="fas fa-sign-out-alt"></i> Keluar</button></div>
<div class="ct" id="CA">
<div class="pg ac" id="Pberanda"><div id="urgA"></div><div class="sr" id="statR"></div><div class="cd"><div class="ct2">Distribusi Status</div><div class="donut-wrap" id="donutA"></div></div><div class="cd"><div class="ct2">Skor Per Motor</div><div class="dw" id="barA"></div></div><div class="cd"><div class="ct2"><i class="fas fa-chart-line" style="color:var(--o)"></i> Biaya Perawatan 6 Bulan</div><div id="costC"></div></div><div id="homeA"></div></div>
<div class="pg" id="Parmada"><div class="chip-g" id="armT" style="margin-bottom:14px"></div><div id="armL"></div></div>
<div class="pg" id="Pinput"><div class="cd" style="border:2px solid var(--o)"><div style="display:flex;align-items:center;gap:10px;margin-bottom:16px"><div style="width:40px;height:40px;border-radius:10px;background:var(--os);display:flex;align-items:center;justify-content:center"><i class="fas fa-clipboard-check" style="color:var(--o);font-size:18px"></i></div><div><div style="font-size:15px;font-weight:800">Lapor Kondisi Motor</div><div style="font-size:11px;color:var(--t2)">Laporkan masalah di lapangan</div></div></div><div class="fg"><label class="ll">Pilih Motor</label><select class="fi" id="inpM"></select></div><div class="fg"><label class="ll">Jenis Masalah</label><div class="chip-g" id="mC"><button class="chip" data-m="Mesin" onclick="tglC(this)"><i class="fas fa-cog"></i> Mesin</button><button class="chip" data-m="Rem" onclick="tglC(this)"><i class="fas fa-hand-paper"></i> Rem</button><button class="chip" data-m="Ban" onclick="tglC(this)"><i class="fas fa-circle"></i> Ban</button><button class="chip" data-m="Oli" onclick="tglC(this)"><i class="fas fa-oil-can"></i> Oli</button><button class="chip" data-m="CVT" onclick="tglC(this)"><i class="fas fa-link"></i> CVT</button><button class="chip" data-m="Listrik" onclick="tglC(this)"><i class="fas fa-bolt"></i> Listrik</button><button class="chip" data-m="Lainnya" onclick="tglC(this)"><i class="fas fa-ellipsis-h"></i> Lainnya</button></div></div><div class="fg"><label class="ll">Keparahan</label><div class="sv-g"><button class="sv-b" data-s="ringan" onclick="pickS(this)"><div class="si"><i class="fas fa-info-circle" style="color:var(--g)"></i></div><div class="sl">Ringan</div></button><button class="sv-b" data-s="sedang" onclick="pickS(this)"><div class="si"><i class="fas fa-exclamation-triangle" style="color:var(--y)"></i></div><div class="sl">Sedang</div></button><button class="sv-b" data-s="berat" onclick="pickS(this)"><div class="si"><i class="fas fa-times-circle" style="color:var(--r)"></i></div><div class="sl">Berat</div></button></div></div><div class="fg"><label class="ll">Keterangan</label><textarea class="fi" id="inpK" placeholder="Jelaskan kondisi motor..."></textarea></div><div class="fg"><label class="ll">Foto Bukti (opsional)</label><input type="file" class="fi" id="inpF" accept="image/*"></div><button class="btn btn-o" onclick="submitLapor()"><i class="fas fa-paper-plane"></i> Kirim Laporan</button></div><div style="margin-top:16px"><div class="ct2" style="padding:0 2px">Laporan Terbaru</div><div class="cd" id="lapL" style="margin-bottom:0"></div></div></div>
<div class="pg" id="Ptracking"><div id="trkMy"></div><div id="trkAct"></div><div style="margin-top:16px"><div class="ct2">Riwayat Pengiriman</div><div class="cd" id="trkH" style="margin-bottom:0"></div></div></div>
<div class="pg" id="Pjadwal"><div class="chip-g" id="jadT" style="margin-bottom:14px"></div><div id="jadL"></div><div id="jadE" style="display:none;text-align:center;padding:40px 20px;color:var(--t3);font-size:13px"><i class="fas fa-calendar-check" style="font-size:36px;margin-bottom:12px;display:block"></i>Tidak ada jadwal</div></div>
<div class="pg" id="Plaporan"><div class="cd"><div class="fg"><label class="ll">Dari</label><input type="date" class="fi" id="rpF"></div><div class="fg"><label class="ll">Sampai</label><input type="date" class="fi" id="rpTo"></div><div class="fg"><label class="ll">Kondisi</label><div class="chip-g" id="rpCC"><button class="chip sel" data-c="all" onclick="tglRC(this)">Semua</button><button class="chip" data-c="sehat" onclick="tglRC(this)">Sehat</button><button class="chip" data-c="perhatian" onclick="tglRC(this)">Perhatian</button><button class="chip" data-c="kritis" onclick="tglRC(this)">Kritis</button></div></div><button class="btn btn-o bsm" onclick="genLap()"><i class="fas fa-search"></i> Tampilkan</button><div style="display:flex;gap:8px;margin-top:12px"><button class="btn btn-w bsm" style="flex:1" onclick="expCSV()"><i class="fas fa-file-csv"></i> Export Excel</button><button class="btn btn-w bsm" style="flex:1" onclick="expPDF()"><i class="fas fa-file-pdf"></i> Cetak PDF</button></div></div><div id="rpR"></div><div id="rpA"></div></div>
<div class="pg" id="Pprofil"><div class="cd" style="text-align:center;padding:28px 20px"><div id="prAv" style="width:72px;height:72px;border-radius:50%;background:var(--os);display:flex;align-items:center;justify-content:center;margin:0 auto 12px;overflow:hidden;box-shadow:0 4px 14px rgba(0,0,0,.08)"><i class="fas fa-user" style="color:var(--o);font-size:26px"></i></div><div style="font-size:17px;font-weight:800" id="prN">-</div><div style="font-size:12px;color:var(--t2);margin-top:4px">PT. Sumber Masanda Jaya</div></div><div class="cd" id="prI"></div><div class="cd" id="installBtn" style="display:none;cursor:pointer;border:2px dashed var(--bd)" onclick="insApp()"><div style="display:flex;align-items:center;gap:12px"><div style="width:40px;height:40px;border-radius:10px;background:var(--os);display:flex;align-items:center;justify-content:center"><i class="fas fa-download" style="color:var(--o)"></i></div><div style="flex:1;min-width:0"><div style="font-size:13px;font-weight:700">Install Aplikasi</div><div style="font-size:11px;color:var(--t2);margin-top:2px">Pasang CMMS di perangkat untuk akses cepat</div></div><i class="fas fa-chevron-right" style="color:var(--t3);font-size:12px"></i></div></div><div id="prM" style="display:none;margin-top:16px"></div><div id="prL" style="display:none;margin-top:16px"></div></div>
<div class="pg" id="Pdetail"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div id="detC"></div></div>
<div class="pg" id="Priwayat"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div class="ct2">Riwayat Servis</div><div class="cd" id="riwC" style="margin-bottom:0"></div></div>
<div class="pg" id="Ppenyusutan"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div class="ct2">Rekomendasi Penyusutan</div><div id="susC"></div></div>
<div class="pg" id="Panalisis"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div class="ct2">Analisis Rule-Based</div><div id="anC"></div></div>
<div class="pg" id="Pusers"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px"><div class="ct2" style="margin:0">Daftar Pengguna</div><button class="btn btn-o bsm" onclick="openUsrM()"><i class="fas fa-plus"></i> Tambah</button></div><div id="usrL"></div></div>
<div class="pg" id="Plokasi"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div id="lokC"></div></div><div class="pg" id="Psuku"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px"><div class="ct2" style="margin:0">Stok Suku Cadang</div><button class="btn btn-o bsm" onclick="openSukM()"><i class="fas fa-plus"></i> Tambah</button></div><div id="sukC"></div></div><div class="pg" id="Paktivitas"><button class="btn btn-w bsm" onclick="goBack()" style="margin-bottom:14px;width:auto"><i class="fas fa-arrow-left"></i> Kembali</button><div class="ct2">Riwayat Aktivitas</div><div id="aktC"></div></div>
</div>
<nav class="bn" id="botNav"></nav>
</div>
<div class="tw" id="toastW"></div>
<div class="mb" id="mArm"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt" id="maT">Tambah Armada</div><button class="mx" onclick="clM('mArm')"><i class="fas fa-times"></i></button></div><div class="mbd"><input type="hidden" id="maE"><div class="fg"><label class="ll">ID Unit</label><input type="text" class="fi" id="maI" placeholder="SMJ-011"></div><div class="fg"><label class="ll">Merk/Tipe</label><input type="text" class="fi" id="maM" placeholder="Piaggio Ape City"></div><div style="display:grid;grid-template-columns:1fr 1fr;gap:12px"><div class="fg"><label class="ll">Tahun</label><select class="fi" id="maY"></select></div><div class="fg"><label class="ll">Trip/Hari</label><input type="number" class="fi" id="maTr" placeholder="5" min="0"></div></div><div class="fg"><label class="ll">Nopol</label><input type="text" class="fi" id="maN" placeholder="B 1234 XYZ"></div><div class="fg"><label class="ll">Terakhir Servis</label><input type="date" class="fi" id="maS"></div><button class="btn btn-o" onclick="saveArm()"><i class="fas fa-save"></i> Simpan</button></div></div></div>
<div class="mb" id="mJad"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt">Buat Jadwal</div><button class="mx" onclick="clM('mJad')"><i class="fas fa-times"></i></button></div><div class="mbd"><div class="fg"><label class="ll">Motor</label><select class="fi" id="mjM"></select></div><div class="fg"><label class="ll">Jenis</label><select class="fi" id="mjJ"><option>Perawatan Berkala</option><option>Servis Ringan</option><option>Servis Berat</option><option>Penggantian Komponen</option></select></div><div class="fg"><label class="ll">Tanggal</label><input type="date" class="fi" id="mjT"></div><div class="fg"><label class="ll">Catatan</label><textarea class="fi" id="mjC" rows="2"></textarea></div><button class="btn btn-o" onclick="saveJad()"><i class="fas fa-save"></i> Simpan</button></div></div></div>
<div class="mb" id="mSel"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt">Selesaikan Servis</div><button class="mx" onclick="clM('mSel')"><i class="fas fa-times"></i></button></div><div class="mbd"><div id="msI" style="margin-bottom:16px"></div><div class="fg"><label class="ll">Biaya Aktual (Rp)</label><input type="number" class="fi" id="msB" placeholder="150000"></div><div class="fg"><label class="ll">Keterangan</label><textarea class="fi" id="msK" rows="2"></textarea></div><div class="fg"><label class="ll">Foto Bukti (opsional)</label><input type="file" class="fi" id="msF" accept="image/*"></div><button class="btn btn-g" onclick="konfSel()"><i class="fas fa-check"></i> Tandai Selesai</button></div></div></div>
<div class="mb" id="mTrk"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt">Mulai Pengiriman</div><button class="mx" onclick="clM('mTrk')"><i class="fas fa-times"></i></button></div><div class="mbd"><div class="fg"><label class="ll">Pilih Motor (hanya yang idle)</label><select class="fi" id="mtM"></select></div><div class="fg"><label class="ll">Gedung Tujuan</label><select class="fi" id="mtG"></select></div><div class="fg"><label class="ll">Distribusi ke Mesin</label><select class="fi" id="mtMe"></select></div><button class="btn btn-o" onclick="startTrk()"><i class="fas fa-play"></i> Mulai Pengiriman</button></div></div></div>
<div class="mb" id="mUser"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt" id="mUsrT">Tambah Pengguna</div><button class="mx" onclick="clM('mUser')"><i class="fas fa-times"></i></button></div><div class="mbd"><div class="fg"><label class="ll">Nama Lengkap</label><input type="text" class="fi" id="muN" placeholder="Nama lengkap"></div><div class="fg"><label class="ll">Username</label><input type="text" class="fi" id="muU" placeholder="username"></div><div class="fg"><label class="ll">Password</label><input type="text" class="fi" id="muP" placeholder="password"></div><div class="fg"><label class="ll">Level</label><select class="fi" id="muR"><option value="operator">Operator</option><option value="leader">Leader</option><option value="manager">Manager</option></select></div><button class="btn btn-o" onclick="addUsr()"><i class="fas fa-user-plus"></i> Tambah</button></div></div></div>
<div class="mb" id="mPrf"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt">Edit Profil</div><button class="mx" onclick="clM('mPrf')"><i class="fas fa-times"></i></button></div><div class="mbd"><div class="fg" style="text-align:center;margin-bottom:18px"><div id="mpAv" onclick="document.getElementById('mpF').click()" style="width:84px;height:84px;border-radius:50%;background:var(--os);display:flex;align-items:center;justify-content:center;margin:0 auto 8px;overflow:hidden;cursor:pointer;border:2px dashed var(--o)"><i class="fas fa-camera" style="color:var(--o);font-size:22px"></i></div><input type="file" id="mpF" accept="image/*" style="display:none" onchange="mpChg(this)"><div style="font-size:11px;color:var(--t3)">Ketuk lingkaran untuk pilih foto profil</div></div><div class="fg"><label class="ll">Nama Lengkap</label><input type="text" class="fi" id="mpN" placeholder="Nama lengkap"></div><div class="fg"><label class="ll">Password Saat Ini</label><input type="password" class="fi" id="mpC" placeholder="Wajib jika ganti password" autocomplete="current-password"></div><div class="fg"><label class="ll">Password Baru</label><input type="password" class="fi" id="mpP" placeholder="Kosongkan jika tidak ganti" autocomplete="new-password"></div><div class="fg"><label class="ll">Konfirmasi Password Baru</label><input type="password" class="fi" id="mpP2" placeholder="Ulangi password baru" autocomplete="new-password"></div><button class="btn btn-o" onclick="savePrf()"><i class="fas fa-save"></i> Simpan</button></div></div></div>
<div class="mb" id="mLok"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt" id="lokT">Tambah</div><button class="mx" onclick="clM('mLok')"><i class="fas fa-times"></i></button></div><div class="mbd"><div class="fg"><label class="ll" id="lokL">Nama</label><input type="text" class="fi" id="lokI" placeholder="Nama baru"></div><button class="btn btn-o" onclick="saveLok()"><i class="fas fa-plus"></i> Tambah</button></div></div></div><div class="mb" id="mSuk"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt" id="sukT">Tambah Suku Cadang</div><button class="mx" onclick="clM('mSuk')"><i class="fas fa-times"></i></button></div><div class="mbd"><input type="hidden" id="sukE"><div class="fg"><label class="ll">Nama</label><input type="text" class="fi" id="sukN" placeholder="Oli Mesin 1L"></div><div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:10px"><div class="fg"><label class="ll">Stok</label><input type="number" class="fi" id="sukQ" value="0" min="0"></div><div class="fg"><label class="ll">Min. Stok</label><input type="number" class="fi" id="sukMn" value="5" min="0"></div><div class="fg"><label class="ll">Satuan</label><input type="text" class="fi" id="sukU" value="pcs"></div></div><div class="fg"><label class="ll">Harga Satuan (Rp)</label><input type="number" class="fi" id="sukP" value="0" min="0" placeholder="85000"></div><div class="fg"><label class="ll">Catatan</label><input type="text" class="fi" id="sukNt" placeholder="opsional"></div><button class="btn btn-o" onclick="saveSuk()"><i class="fas fa-save"></i> Simpan</button></div></div></div><div class="mb" id="mPk"><div class="ms"><div class="mh"></div><div class="mhd"><div class="mt">Pakai Suku Cadang</div><button class="mx" onclick="clM('mPk')"><i class="fas fa-times"></i></button></div><div class="mbd"><div id="pkI" style="margin-bottom:16px"></div><div class="fg"><label class="ll">Motor</label><select class="fi" id="pkV"></select></div><div class="fg"><label class="ll">Jumlah</label><input type="number" class="fi" id="pkQ" value="1" min="1"></div><button class="btn btn-o" onclick="savePk()"><i class="fas fa-wrench"></i> Pakai</button></div></div></div>
<script>
const CY=new Date().getFullYear(),HB=35000000;
const $=id=>document.getElementById(id),$$=s=>document.querySelectorAll(s);

const CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]')?.content || '';
const DEFAULT_HEADERS = {
  'Content-Type': 'application/json',
  'Accept': 'application/json',
  'X-Requested-With': 'XMLHttpRequest',
  'X-CSRF-TOKEN': CSRF_TOKEN,
  // Mencegah ngrok free menampilkan halaman peringatan browser
  // saat memanggil API lewat tunnel (URL .ngrok-free.dev).
  'ngrok-skip-browser-warning': 'true',
};

async function apiRequest(path, options = {}) {
  const opts = {
    credentials: 'same-origin',
    headers: { ...DEFAULT_HEADERS, ...(options.headers || {}) },
    ...options,
  };

  if (opts.body && typeof opts.body !== 'string') {
    opts.body = JSON.stringify(opts.body);
  }

  let response;
  try {
    response = await fetch(path, opts);
  } catch (e) {
    throw new Error('Tidak dapat terhubung ke server. Pastikan server berjalan.');
  }
  const contentType = response.headers.get('content-type') || '';
  let data = null;
  if (contentType.includes('application/json')) {
    try {
      data = await response.json();
    } catch (e) {
      throw new Error('Respons server tidak valid (bukan JSON). HTTP ' + response.status + '. Muat ulang halaman & coba lagi.');
    }
  }

  if (!response.ok) {
    if (response.status === 401) {
      handleUnauthenticated();
      throw new Error('Sesi berakhir, silakan login ulang.');
    }

    const errorMessage = data?.error || data?.message || `HTTP ${response.status}`;
    throw new Error(errorMessage);
  }

  return data;
}

function handleUnauthenticated() {
  CU = null;
  $("app").style.display = "none";
  $("loginScreen").classList.remove("hide");
  $("lUser").value = "";
  $("lPass").value = "";
  $("lErr").textContent = "Sesi habis, silakan login ulang.";
}

function normalizeUser(user) {
  return {
    id: user.id,
    nama: user.name || user.nama || '',
    username: user.username || '',
    password: user.password || '',
    role: user.role || '',
    photo: user.photo || ''
  };
}

function normalizeVehicle(vehicle) {
  return {
    id: vehicle.code || vehicle.id,
    mk: vehicle.name || vehicle.mk || '',
    th: vehicle.year || vehicle.th || new Date().getFullYear(),
    tr: vehicle.trips_per_day || vehicle.tr || 0,
    ls: vehicle.last_service_date || vehicle.ls || '',
    np: vehicle.plate || vehicle.np || '',
    ts: vehicle.service_count || vehicle.ts || 0,
    tb: vehicle.total_cost || vehicle.tb || 0
  };
}

function normalizeSchedule(schedule) {
  return {
    id: schedule.id,
    aid: schedule.vehicle_code || schedule.aid || '',
    jn: schedule.job_type || schedule.jn || '',
    tg: schedule.scheduled_at || schedule.tg || '',
    ct: schedule.note || schedule.ct || '',
    cost: schedule.cost || 0,
    st: schedule.status || schedule.st || 'menunggu', cost: schedule.cost || 0
  };
}

function normalizeRepair(repair) {
  return {
    id: repair.id,
    aid: repair.vehicle_code || repair.aid || '',
    tg: repair.repaired_at || repair.tg || '',
    jn: repair.repair_type || repair.jn || '',
    bz: repair.cost || repair.bz || 0,
    kt: repair.note || repair.kt || ''
  };
}

function normalizeTrack(track) {
  return {
    id: track.id,
    mid: track.vehicle_code || track.mid || '',
    op: track.operator_name || track.op || '',
    st: track.status || track.st || '',
    gd: track.building || track.gd || '',
    ms: track.machine || track.ms || '',
    mu: track.started_at || track.mu || '',
    se: track.ended_at || track.se || null
  };
}

function normalizeReport(report) {
  return {
    id: report.id,
    vehicle_code: report.vehicle_code || report.vehicle || '',
    issues: report.issues ? (typeof report.issues === 'string' ? JSON.parse(report.issues) : report.issues) : [],
    severity: report.severity || '',
    notes: report.notes || report.Notes || '',
    photo: report.photo || '',
    created_at: report.created_at || ''
  };
}

async function loadData(preservePage = false) {
  try {
    const payload = await apiRequest('/data', { method: 'GET' });
    if (payload.user) {
      CU = normalizeUser(payload.user);
      users = (payload.users || []).map(normalizeUser);
      arm = (payload.vehicles || []).map(normalizeVehicle);
      locations = payload.locations || [];
      ged = locations.filter(item => item.type === 'gedung').map(item => item.name);
      mes = locations.filter(item => item.type === 'mesin').map(item => item.name);
      jad = (payload.schedules || []).map(normalizeSchedule);
      riw = (payload.repairs || []).map(normalizeRepair);
      trk = (payload.tracks || []).map(normalizeTrack);
      reports = (payload.reports || []).map(normalizeReport);
      logs = payload.logs || [];
      parts = payload.parts || [];
      lap = reports.slice();
      $("loginScreen").classList.add("hide");
      $("app").style.display = "flex";
      buildNav();
      if (preservePage) {
        doRender(CP);
      } else {
        navTo("beranda");
      }
      return true;
    }
    return false;
  } catch (error) {
    console.warn('Data load failed', error);
    return false;
  }
}

let users=[];
let reports=[];
let locations=[];
let ged=[];
let mes=[];
let arm=[];
let jad=[];
let riw=[];
let lap=[];
let CU=null,CP="beranda",PH=["beranda"],aF="all",jF="all",rC="all",sId=null,lokT="gedung";
let trk=[];
let logs=[];
let parts=[];

function fRp(n){return"Rp "+Number(n).toLocaleString("id-ID")}
function fTg(s){if(!s)return"-";return new Date(s).toLocaleDateString("id-ID",{day:"numeric",month:"short",year:"numeric"})}
function fTm(s){if(!s)return"-";return new Date(s).toLocaleTimeString("id-ID",{hour:"2-digit",minute:"2-digit"})}
function hK(t){if(!t)return 999;const a=new Date();a.setHours(0,0,0,0);const b=new Date(t);b.setHours(0,0,0,0);return Math.floor((b-a)/864e5)}
function isB(m){return trk.some(t=>t.mid===m&&t.st==="digunakan")}
function popG(s){$(s).innerHTML=ged.map(g=>`<option value="${g}">${g}</option>`).join("")}
function popM(s){$(s).innerHTML=`<option value="-">Tidak ada</option>`+mes.map(m=>`<option value="${m}">${m}</option>`).join("")}
function popIdle(s){$(s).innerHTML=arm.filter(u=>!isB(u.id)).map(u=>`<option value="${u.id}">${u.id} - ${u.mk}</option>`).join("")}

function hSk(u){let sT=u.tr<=3?100:u.tr<=6?80:u.tr<=9?55:u.tr<=12?30:10;const us=CY-u.th;let sU=us<=1?100:us<=3?85:us<=5?60:us<=7?35:15;let sRJ=u.ts<=2?100:u.ts<=5?75:u.ts<=9?45:u.ts<=13?20:5;let sRB=u.tb/1e6<=.5?100:u.tb/1e6<=2?75:u.tb/1e6<=4?50:u.tb/1e6<=6?25:5;let sR=(sRJ*.5)+(sRB*.5);const hr=Math.floor((new Date()-new Date(u.ls))/864e5);let pn=hr>90?Math.min((hr-90)*.3,15):0;let ak=Math.max(0,Math.min(100,Math.round(sT*.35+sU*.25+sR*.4-pn)));return{sk:ak,dT:Math.round(sT),dU:Math.round(sU),dR:Math.round(sR),pn:Math.round(pn),hr,us}}
function gSt(s){return s>=70?{l:"Sehat",c:"var(--g)",bg:"var(--gb)",bc:"bg-g",lv:"sehat"}:s>=40?{l:"Perhatian",c:"var(--y)",bg:"var(--yb)",bc:"bg-y",lv:"perhatian"}:{l:"Kritis",c:"var(--r)",bg:"var(--rb)",bc:"bg-r",lv:"kritis"}}
function gRk(s){return s>=70?"Perawatan Berkala":s>=55?"Servis Ringan":s>=40?"Servis Berat":"Overhaul / Ganti Komponen"}
function gRm(s){return s>=70?"Perawatan berkala rutin.":s>=55?"Servis ringan 1-2 minggu.":s>=40?"Servis berat segera. Batasi trip.":"HENTIKAN penggunaan. Overhaul segera."}
function cSu(u){const h=hSk(u),us=h.us,th=HB*.7,al=[];if(us>8)al.push("Usia "+us+" tahun (>8 thn)");if(h.sk<30)al.push("Skor "+h.sk+" (<30)");if(u.tb>th)al.push("Biaya "+fRp(u.tb)+" (>70% harga baru)");return{ds:al.length>0,al,us,sk:h.sk,tb:u.tb,pc:Math.round(u.tb/HB*100)}}
function aSc(){return arm.map(u=>{const h=hSk(u);return{...u,...h,st:gSt(h.sk)}})}

function tglLP(){const i=$("lPass"),e=$("lEye");if(i.type==="password"){i.type="text";e.className="fas fa-eye-slash"}else{i.type="password";e.className="fas fa-eye"}}
async function doLogin(){
  const u=$("lUser").value.trim();
  const p=$("lPass").value;
  if(!u||!p){
    $("lErr").textContent="Username dan password wajib diisi";
    return;
  }
  $("lErr").textContent="";
  const btn=$("lBtn");
  if(btn.disabled) return;
  btn.disabled=true;
  btn.classList.add("loading");
  try {
    const res = await apiRequest('/login', {
      method: 'POST',
      body: { username: u, password: p }
    });
    CU = res.user;
    const ok = await loadData();
    if (!ok) {
      $("lErr").textContent = "Login berhasil di server, tetapi sesi tidak tersimpan di browser. Periksa pengaturan cookie/HTTPS, lalu muat ulang halaman.";
    }
  } catch (error) {
    $("lErr").textContent = error.message;
  } finally {
    btn.disabled=false;
    btn.classList.remove("loading");
  }
}
async function doLogout(){
  try {
    await apiRequest('/logout', { method: 'POST' });
  } catch (error) {
    console.warn('Logout error', error);
  }
  CU = null;
  $("app").style.display = "none";
  $("loginScreen").classList.remove("hide");
  $("lUser").value = "";
  $("lPass").value = "";
  $("lErr").textContent = "";
}
document.addEventListener("keydown",function(e){if(e.key==="Enter"&&!CU&&$("loginScreen").style.display!=="none")doLogin()});
let dPrompt=null;
const isStandalone=window.matchMedia("(display-mode: standalone)").matches||navigator.standalone===true;
function isIOS(){return/iphone|ipad|ipod/i.test(navigator.userAgent)}
function showInstallBtn(){const b=$("installBtn");if(b&&!isStandalone)b.style.display="block"}
window.addEventListener("beforeinstallprompt",e=>{e.preventDefault();dPrompt=e;showInstallBtn()});
window.addEventListener("appinstalled",()=>{dPrompt=null;const b=$("installBtn");if(b)b.style.display="none";toast("Aplikasi berhasil diinstall","ok")});
async function insApp(){
  if(dPrompt){
    const p=dPrompt;
    dPrompt=null;
    const c=await (p.prompt()||p.userChoice);
    if(!c||c.outcome==="accepted"){const b=$("installBtn");if(b)b.style.display="none"}
  }else if(isIOS()){
    toast("Buka menu Bagikan (ikon \u2B06\uFE0F) lalu pilih 'Tambahkan ke Layar Utama'","ok");
  }else{
    toast("Gunakan menu browser: pilih 'Install aplikasi' / 'Install App'","ok");
  }
}
if(isIOS()&&!isStandalone)showInstallBtn();
const TITLES={beranda:"Beranda",armada:"Armada",input:"Lapor Kondisi",tracking:"Tracking",jadwal:"Jadwal Servis",laporan:"Laporan",profil:"Profil",detail:"Detail Armada",riwayat:"Riwayat Servis",penyusutan:"Rekomendasi Penyusutan",analisis:"Analisis Rule-Based",users:"Kelola Akun",lokasi:"Kelola Lokasi",suku:"Suku Cadang",aktivitas:"Riwayat Aktivitas"};
const NAVCFG={operator:[{p:"beranda",i:"fa-home",l:"Beranda"},{p:"armada",i:"fa-motorcycle",l:"Armada"},{p:"_c",i:"fa-plus",l:"Lapor",a:"input"},{p:"tracking",i:"fa-map-marker-alt",l:"Tracking"},{p:"profil",i:"fa-user-circle",l:"Profil"}],leader:[{p:"beranda",i:"fa-home",l:"Beranda"},{p:"armada",i:"fa-motorcycle",l:"Armada"},{p:"_c",i:"fa-calendar-check",l:"Jadwal",a:"_jadwal"},{p:"tracking",i:"fa-map-marker-alt",l:"Tracking"},{p:"profil",i:"fa-user-circle",l:"Profil"}],manager:[{p:"beranda",i:"fa-home",l:"Beranda"},{p:"armada",i:"fa-motorcycle",l:"Armada"},{p:"_c",i:"fa-plus",l:"Tambah",a:"_tambah"},{p:"jadwal",i:"fa-calendar-check",l:"Jadwal"},{p:"profil",i:"fa-user-circle",l:"Profil"}]};
function buildNav(){$("botNav").innerHTML=NAVCFG[CU.role].map(n=>{if(n.p==="_c"){if(CU.role==="manager")return`<button class="bi" onclick="navC('${n.a}')" aria-label="${n.l}"><i class="fas ${n.i}"></i><span>${n.l}</span></button>`;return`<button class="bc" onclick="navC('${n.a}')" aria-label="${n.l}"><i class="fas ${n.i}"></i></button>`}return`<button class="bi" data-p="${n.p}" onclick="navTo('${n.p}')"><i class="fas ${n.i}"></i><span>${n.l}</span></button>`;}).join("")}
function navC(a){if(a==="input")navTo("input");else if(a==="_jadwal")navTo("jadwal");else if(a==="_tambah")openMA()}
function navTo(pg){if(pg!==CP)PH.push(CP);CP=pg;$$(".pg").forEach(p=>p.classList.remove("ac"));$("P"+pg).classList.add("ac");$$(".bi").forEach(b=>b.classList.toggle("ac",b.dataset.p===pg));$("topT").textContent=TITLES[pg]||"Detail";$("CA").scrollTop=0;doRender(pg)}
function goBack(){let prev=PH.pop()||"beranda";PH=PH.filter(p=>p!=="beranda");CP=prev;$$(".pg").forEach(p=>p.classList.remove("ac"));$("P"+prev).classList.add("ac");$$(".bi").forEach(b=>b.classList.toggle("ac",b.dataset.p===prev));$("topT").textContent=TITLES[prev]||"Detail";doRender(prev)}
function doRender(pg){({beranda:rBer,armada:rArm,input:rInp,tracking:rTrk,jadwal:rJad,laporan:rLap,profil:rPrf,penyusutan:rSus,analisis:rAna,users:rUsr,lokasi:rLok,suku:rSuk,aktivitas:rAkt})[pg]?.()}
function rBer(){const all=aSc(),se=all.filter(a=>a.st.lv==="sehat").length,kr=all.filter(a=>a.st.lv==="kritis").length,bu=trk.filter(t=>t.st==="digunakan").length,su=arm.filter(u=>cSu(u).ds).length;const rmL=remList(),remN=rmL.length,remHTML=renderRem(rmL);let s;if(CU.role==="operator")s=`<div class="sb"><div class="sn">${arm.length}</div><div class="sl">Total Unit</div></div><div class="sb"><div class="sn" style="color:var(--g)">${se}</div><div class="sl">Sehat</div></div><div class="sb"><div class="sn" style="color:var(--o)">${bu}</div><div class="sl">Digunakan</div></div>`;else if(CU.role==="leader")s=`<div class="sb"><div class="sn">${arm.length}</div><div class="sl">Total</div></div><div class="sb"><div class="sn" style="color:var(--g)">${se}</div><div class="sl">Sehat</div></div><div class="sb"><div class="sn" style="color:var(--r)">${kr}</div><div class="sl">Kritis</div></div>`;else s=`<div class="sb"><div class="sn">${arm.length}</div><div class="sl">Total</div></div><div class="sb"><div class="sn" style="color:var(--g)">${se}</div><div class="sl">Sehat</div></div><div class="sb"><div class="sn" style="color:var(--r)">${kr+su}</div><div class="sl">Kritis/Susut</div></div>`;$("statR").innerHTML=`<div class="sb"><div class="sn">${arm.length}</div><div class="sl">Total Unit</div></div><div class="sb"><div class="sn" style="color:var(--g)">${se}</div><div class="sl">Sehat</div></div><div class="sb"><div class="sn" style="color:${remN?"var(--r)":"var(--t)"}">${remN}</div><div class="sl">Reminder</div></div>`;$("urgA").innerHTML=`<div class="cd" style="margin-bottom:14px;background:linear-gradient(135deg,#FF6B00,#FF8C38);border:none;color:#fff"><div style="font-size:18px;font-weight:800">Halo, ${CU.nama.split(" ")[0]}! 👋</div><div style="font-size:12px;opacity:.9;margin-top:2px">${new Date().toLocaleDateString("id-ID",{weekday:"long",day:"numeric",month:"long",year:"numeric"})}</div></div>`+(kr>0?`<div class="ug"><div class="un">${kr}</div><div class="ut"><strong>${kr} motor KRITIS</strong> — segera lakukan perawatan</div></div>`:"")+remHTML;const pe=all.filter(a=>a.st.lv==="perhatian").length,gD=all.length?se/all.length*360:0,yD=all.length?(se+pe)/all.length*360:0;$("donutA").innerHTML=`<div class="donut" style="background:conic-gradient(var(--g) 0deg ${gD}deg,var(--y) ${gD}deg ${yD}deg,var(--r) ${yD}deg 360deg)"><div class="donut-c"><div class="dn">${all.length}</div><div class="dl">Unit</div></div></div><div class="donut-leg"><div class="donut-li"><div class="donut-dot" style="background:var(--g)"></div>Sehat (${se})</div><div class="donut-li"><div class="donut-dot" style="background:var(--y)"></div>Perhatian (${pe})</div><div class="donut-li"><div class="donut-dot" style="background:var(--r)"></div>Kritis (${kr})</div></div>`;const sorted=[...all].sort((a,b)=>a.sk-b.sk);$("barA").innerHTML=sorted.map(u=>`<div class="dc"><div class="dv">${u.sk}</div><div class="df" style="height:${u.sk}%;background:${u.st.c}"></div><div class="dl">${u.id.replace("SMJ-","")}</div></div>`).join("");const months=[],nowM=new Date();for(let i=5;i>=0;i--){const d=new Date(nowM.getFullYear(),nowM.getMonth()-i,1);months.push({k:d.getMonth()+"-"+d.getFullYear(),l:d.toLocaleDateString("id-ID",{month:"short"}),v:0})}riw.forEach(r=>{const d=new Date(r.tg),k=d.getMonth()+"-"+d.getFullYear(),m=months.find(x=>x.k===k);if(m)m.v+=r.bz});const mx=Math.max(...months.map(m=>m.v),1);const cw=$("costC");if(cw)cw.innerHTML=`<div class="gr">${months.map(m=>`<div class="bc2"><div class="dv">${m.v?fRp(m.v).replace("Rp ",""):""}</div><div class="df" style="height:${Math.max(3,Math.round(m.v/mx*90))}%;background:var(--o)"></div><div class="dl">${m.l}</div></div>`).join("")}</div>`;let act="";if(CU.role==="operator")act=`<div class="qg"><div class="qa" onclick="navTo('input')"><div class="qi" style="color:var(--o)"><i class="fas fa-exclamation-circle"></i></div><div class="ql">Lapor Masalah</div><div class="qs">Laporkan kondisi motor</div></div><div class="qa" onclick="navTo('tracking')"><div class="qi" style="color:var(--b)"><i class="fas fa-map-marker-alt"></i></div><div class="ql">Status Saya</div><div class="qs">Tracking pengiriman</div></div></div>`;else if(CU.role==="leader"){act=`<div class="qg"><div class="qa" onclick="navTo('input')"><div class="qi" style="color:var(--o)"><i class="fas fa-exclamation-circle"></i></div><div class="ql">Lapor Masalah</div><div class="qs">Laporkan kondisi motor</div></div><div class="qa" onclick="openMJ()"><div class="qi" style="color:var(--o)"><i class="fas fa-calendar-plus"></i></div><div class="ql">Buat Jadwal</div><div class="qs">Atur perawatan</div></div><div class="qa" onclick="navTo('tracking')"><div class="qi" style="color:${bu?'var(--r)':'var(--b)'}"><i class="fas fa-satellite-dish"></i></div><div class="ql">${bu} Aktif</div><div class="qs">Tracking motor</div></div><div class="qa" onclick="navTo('users')"><div class="qi" style="color:var(--y)"><i class="fas fa-users"></i></div><div class="ql">Kelola User</div><div class="qs">Tambah pengguna baru</div></div><div class="qa" onclick="navTo('laporan')"><div class="qi" style="color:var(--g)"><i class="fas fa-chart-bar"></i></div><div class="ql">Laporan</div><div class="qs">Analisis & riwayat</div></div></div>`;}else act=`<div class="qg"><div class="qa" onclick="navTo('input')"><div class="qi" style="color:var(--o)"><i class="fas fa-exclamation-circle"></i></div><div class="ql">Lapor Masalah</div><div class="qs">Laporkan kondisi motor</div></div><div class="qa" onclick="navTo('tracking')"><div class="qi" style="color:var(--b)"><i class="fas fa-map-marker-alt"></i></div><div class="ql">Tracking</div><div class="qs">Pantau pengiriman aktif</div></div><div class="qa" onclick="openMA()"><div class="qi" style="color:var(--o)"><i class="fas fa-plus-circle"></i></div><div class="ql">Tambah Armada</div><div class="qs">Input motor baru</div></div><div class="qa" onclick="navTo('penyusutan')"><div class="qi" style="color:var(--r)"><i class="fas fa-trash-alt"></i></div><div class="ql">${su} Penyusutan</div><div class="qs">Rekomendasi ganti</div></div><div class="qa" onclick="navTo('analisis')"><div class="qi" style="color:var(--b)"><i class="fas fa-brain"></i></div><div class="ql">Analisis Rule</div><div class="qs">Rule-based system</div></div><div class="qa" onclick="navTo('suku')"><div class="qi" style="color:var(--y)"><i class="fas fa-boxes"></i></div><div class="ql">Suku Cadang</div><div class="qs">Stok spare part</div></div><div class="qa" onclick="navTo('aktivitas')"><div class="qi" style="color:var(--b)"><i class="fas fa-history"></i></div><div class="ql">Aktivitas</div><div class="qs">Riwayat pengguna</div></div><div class="qa" onclick="navTo('laporan')"><div class="qi" style="color:var(--g)"><i class="fas fa-file-alt"></i></div><div class="ql">Laporan</div><div class="qs">Range waktu & kondisi</div></div></div>`;$("homeA").innerHTML=act}
function rArm(){$("armT").innerHTML=`<button class="chip sel" data-af="all" onclick="fA('all',this)">Semua</button><button class="chip" data-af="sehat" onclick="fA('sehat',this)"><i class="fas fa-circle" style="font-size:8px;color:var(--g)"></i> Sehat</button><button class="chip" data-af="perhatian" onclick="fA('perhatian',this)"><i class="fas fa-circle" style="font-size:8px;color:var(--y)"></i> Perhatian</button><button class="chip" data-af="kritis" onclick="fA('kritis',this)"><i class="fas fa-circle" style="font-size:8px;color:var(--r)"></i> Kritis</button>`;let d=aSc();if(aF!=="all")d=d.filter(x=>x.st.lv===aF);d.sort((a,b)=>a.sk-b.sk);$("armL").innerHTML=d.length?d.map(u=>{const b=isB(u.id);return`<div class="mc" onclick="showDet('${u.id}')"><div class="mr"><div class="hc" style="background:${u.st.c}"><span>${u.sk}</span></div><div class="mi"><div class="mid">${u.id}${b?' <i class="fas fa-circle" style="font-size:8px;color:var(--o)"></i>':''}</div><div class="msub">${u.mk}</div></div><span class="bg ${u.st.bc}">${u.st.l}</span></div><div class="mm"><span><i class="fas fa-road"></i>${u.tr} trip/hari</span><span><i class="fas fa-calendar"></i>${fTg(u.ls)}</span><span><i class="fas fa-wrench"></i>${u.ts}x</span></div></div>`;}).join(""):`<div style="text-align:center;padding:40px;color:var(--t3);font-size:13px">Tidak ada data</div>`}
function fA(f,b){aF=f;$$("[data-af]").forEach(x=>x.classList.remove("sel"));b.classList.add("sel");rArm()}
function showDet(id){const u=arm.find(a=>a.id===id);if(!u)return;const h=hSk(u),st=gSt(h.sk),su=cSu(u),rw=riw.filter(r=>r.aid===id).sort((a,b)=>new Date(b.tg)-new Date(a.tg)),b=isB(id),tk=trk.find(t=>t.mid===id&&t.st==="digunakan");let ab="";if(CU.role==="manager")ab=`<div style="display:flex;gap:8px;margin-bottom:14px"><button class="btn btn-o bsm" style="flex:1" onclick="editArm('${id}')"><i class="fas fa-edit"></i> Edit</button><button class="btn btn-w bsm" style="flex:1" onclick="delArm('${id}')"><i class="fas fa-trash" style="color:var(--r)"></i> Hapus</button></div><div style="display:flex;gap:8px;margin-bottom:14px"><button class="btn btn-o bsm" style="flex:1" onclick="openMJ('${id}')"><i class="fas fa-calendar-plus"></i> Jadwalkan</button><button class="btn btn-w bsm" style="flex:1" onclick="showRiw('${id}')"><i class="fas fa-clipboard-list"></i> Riwayat</button></div>`;else if(CU.role==="leader")ab=`<div style="display:flex;gap:8px;margin-bottom:14px"><button class="btn btn-o bsm" style="flex:1" onclick="openMJ('${id}')"><i class="fas fa-calendar-plus"></i> Jadwalkan</button><button class="btn btn-w bsm" style="flex:1" onclick="showRiw('${id}')"><i class="fas fa-clipboard-list"></i> Riwayat</button></div>`;else ab=`<div style="margin-bottom:14px"><button class="btn btn-w bsm" style="width:100%" onclick="showRiw('${id}')"><i class="fas fa-clipboard-list"></i> Riwayat Servis</button></div>`;$("detC").innerHTML=`<div class="cd" style="text-align:center"><div class="hc" style="background:${st.c};width:72px;height:72px;margin:0 auto 10px"><span style="font-size:22px">${h.sk}</span></div><div style="font-size:20px;font-weight:800">${u.id}</div><div style="font-size:13px;color:var(--t2);margin-top:2px">${u.mk} ${u.np?"· "+u.np:""}</div><div style="margin-top:8px;display:flex;gap:6px;justify-content:center;flex-wrap:wrap"><span class="bg ${st.bc}">${st.l}</span>${b?'<span class="bg bg-o"><i class="fas fa-circle" style="font-size:6px"></i> Digunakan</span>':'<span class="bg bg-b"><i class="fas fa-circle" style="font-size:6px"></i> Idle</span>'}</div>${tk?`<div style="margin-top:12px;padding:12px;background:var(--bb);border-radius:10px;font-size:12px"><i class="fas fa-map-marker-alt" style="color:var(--b)"></i> <strong>${tk.op}</strong> · ${tk.gd}${tk.ms!="-"?" → "+tk.ms:""} · Sejak ${fTm(tk.mu)}</div>`:""}</div>${ab}<div class="ds-row"><div class="ds-i"><div class="ds-v" style="color:var(--o)">${h.dT}</div><div class="ds-l">Trip</div></div><div class="ds-i"><div class="ds-v" style="color:var(--b)">${h.dU}</div><div class="ds-l">Usia</div></div><div class="ds-i"><div class="ds-v" style="color:var(--y)">${h.dR}</div><div class="ds-l">Riwayat</div></div></div>${h.pn>0?`<div style="padding:12px;background:var(--rb);border-radius:12px;margin-bottom:14px;font-size:12px;color:var(--r);font-weight:600"><i class="fas fa-exclamation-circle"></i> Terlambat servis ${h.hr} hari (-${h.pn} poin)</div>`:""}<div class="cd" style="background:${st.bg};border-color:${st.c}22"><div style="font-size:11px;font-weight:700;color:${st.c};text-transform:uppercase;margin-bottom:4px"><i class="fas fa-stethoscope"></i> ${gRk(h.sk)}</div><div style="font-size:13px;color:var(--t2);line-height:1.5">${gRm(h.sk)}</div></div>${CU.role==="manager"?`<div class="${su.ds?'ru':'ru-ok'}"><div style="font-size:12px;font-weight:700;color:${su.ds?'var(--r)':'var(--g)'}">${su.ds?'Disarankan Penyusutan':'Masih Layak Pakai'}</div>${su.ds?`<div style="font-size:11px;color:var(--t2);margin-top:4px">Alasan: ${su.al.join("; ")}</div><div style="font-size:11px;color:var(--t3);margin-top:4px">Biaya: ${su.pc}% harga baru</div>`:`<div style="font-size:11px;color:var(--t2);margin-top:4px">Usia ${su.us}thn, Skor ${su.sk}, Biaya ${su.pc}%</div>`}</div>`:""}<div style="display:grid;grid-template-columns:1fr 1fr;gap:10px"><div class="sb"><div style="font-size:10px;color:var(--t3);font-weight:600">Usia</div><div style="font-size:18px;font-weight:800;margin-top:2px">${h.us} thn</div></div><div class="sb"><div style="font-size:10px;color:var(--t3);font-weight:600">Total Biaya</div><div style="font-size:18px;font-weight:800;margin-top:2px">${fRp(u.tb)}</div></div></div>${rw.length?`<div style="margin-top:14px"><div class="ct2">Servis Terakhir</div><div class="cd" style="margin-bottom:0">${rw.slice(0,5).map(r=>`<div class="ri"><div class="rd"></div><div style="flex:1;min-width:0"><div style="font-size:13px;font-weight:700">${r.jn}</div><div style="font-size:11px;color:var(--t3)">${fTg(r.tg)}</div></div><div style="font-size:12px;font-weight:700">${fRp(r.bz)}</div></div>`).join("")}</div></div>`:""}`;navTo("detail")}
function rInp(){$("inpM").innerHTML=arm.map(u=>`<option value="${u.id}">${u.id} - ${u.mk}</option>`).join("");$$("#mC .chip").forEach(c=>c.classList.remove("sel"));$$(".sv-b").forEach(b=>b.className="sv-b");$("inpK").value="";$("inpF").value="";rLapL()}
function tglC(e){e.classList.toggle("sel")}function pickS(e){const mp={ringan:"sg",sedang:"sy",berat:"svr"};$$(".sv-b").forEach(b=>b.className="sv-b");e.classList.add(mp[e.dataset.s]||"sg")}
async function submitLapor(){
  const m=$("inpM").value;
  const ms=[...$$("#mC .chip.sel")].map(c=>c.dataset.m);
  const sb=[...$$(".sv-b")].find(b=>b.className!=="sv-b");
  const kt=$("inpK").value.trim();
  if(!ms.length){toast("Pilih minimal 1 jenis masalah","er");return}
  if(!sb){toast("Pilih keparahan","er");return}
  const sv=sb.dataset.s;
  const pf=$("inpF");
  let photo="";
  if(pf&&pf.files&&pf.files[0]){const fl=pf.files[0];if(fl.size>4*1024*1024){toast("Foto maksimal 4MB","er");return}photo=await new Promise(res=>{const rd=new FileReader();rd.onload=e=>res(e.target.result);rd.readAsDataURL(fl)})}

  try {
    await apiRequest('/report', {
      method: 'POST',
      body: { vehicle: m, issues: JSON.stringify(ms), severity: sv, notes: kt, photo }
    });
    toast("Laporan dikirim","ok");
    await loadData(true);
  } catch (error) {
    toast(error.message,"er");
  }
}
function rLapL(){const el=$("lapL");if(!lap.length){el.innerHTML='<div style="text-align:center;padding:20px;color:var(--t3);font-size:13px">Belum ada laporan</div>';return}el.innerHTML=lap.slice(0,8).map(l=>{const u=arm.find(a=>a.id===l.vehicle_code);const sc=l.severity==="ringan"?"var(--g)":l.severity==="sedang"?"var(--y)":"var(--r)";const sl=l.severity==="ringan"?"Ringan":l.severity==="sedang"?"Sedang":"Berat";const t=new Date(l.created_at);return`<div style="padding:12px 0;border-bottom:1px solid var(--bd)"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:4px"><span style="font-size:13px;font-weight:700">${u?u.id+" - "+u.mk:l.vehicle_code}</span><span class="bg" style="background:${sc}18;color:${sc}">${sl}</span></div><div style="font-size:12px;color:var(--t2)">${(l.issues||[]).join(", ")}</div>${l.notes?`<div style="font-size:11px;color:var(--t3);margin-top:4px">${l.notes}</div>`:""}${l.photo?`<div class="ptd"><img class="thum" src="${l.photo}" alt="foto" onclick="window.open('${l.photo}','_blank')"></div>`:""}<div style="font-size:10px;color:var(--t3);margin-top:6px">${t.toLocaleDateString("id-ID",{day:"numeric",month:"short",year:"numeric",hour:"2-digit",minute:"2-digit"})}</div></div>`}).join("")}
function rTrk(){if(CU.role==="operator"){const my=trk.find(t=>t.op===CU.nama&&t.st==="digunakan");if(my){const u=arm.find(a=>a.id===my.mid);$("trkMy").innerHTML=`<div class="tk-a"><div style="display:flex;align-items:center;gap:10px;margin-bottom:12px"><div style="width:36px;height:36px;border-radius:10px;background:var(--o);display:flex;align-items:center;justify-content:center"><i class="fas fa-motorcycle" style="color:#fff;font-size:14px"></i></div><div><div style="font-size:15px;font-weight:800">${u?u.mk:my.mid}</div><div style="font-size:12px;color:var(--od)">Sedang digunakan</div></div></div><div style="display:flex;flex-direction:column"><div style="display:flex;align-items:center;gap:10px;padding:10px 0"><div style="width:12px;height:12px;border-radius:50%;background:var(--o);flex-shrink:0"></div><div><div style="font-size:13px;font-weight:600">Berangkat dari Gudang</div><div style="font-size:11px;color:var(--t3)">${fTm(my.mu)}</div></div></div><div style="width:2px;height:20px;background:var(--bd);margin-left:5px"></div><div style="display:flex;align-items:center;gap:10px;padding:10px 0"><div style="width:12px;height:12px;border-radius:50%;background:var(--g);flex-shrink:0"></div><div><div style="font-size:13px;font-weight:600">Menuju ${my.gd}${my.ms!=="-"?" → "+my.ms:""}</div><div style="font-size:11px;color:var(--t3)">Dalam perjalanan</div></div></div></div><button class="btn btn-g bsm" style="margin-top:14px" onclick="endTrk(${my.id})"><i class="fas fa-flag-checkered"></i> Selesaikan</button></div>`;}else{$("trkMy").innerHTML=`<div class="cd" style="text-align:center;padding:24px"><div style="font-size:36px;color:var(--t3);margin-bottom:8px"><i class="fas fa-parking"></i></div><div style="font-size:14px;font-weight:700;color:var(--t2)">Tidak ada pengiriman aktif</div><button class="btn btn-o bsm" style="margin-top:14px" onclick="openTrk()"><i class="fas fa-play"></i> Mulai Pengiriman</button></div>`;}}else{$("trkMy").innerHTML=""}let act=trk.filter(t=>t.st==="digunakan");if(CU.role==="operator")act=act.filter(t=>t.op===CU.nama);$("trkAct").innerHTML=act.length?`<div class="ct2">${CU.role==="leader"?"Semua Motor Aktif":"Aktif"}</div>`+act.map(t=>{const u=arm.find(a=>a.id===t.mid);return`<div class="cd" style="margin-bottom:10px"><div style="display:flex;align-items:center;gap:14px"><div class="tm" style="background:var(--os);color:var(--o)"><i class="fas fa-motorcycle"></i></div><div style="flex:1"><div style="font-size:14px;font-weight:700">${u?u.id+" - "+u.mk:t.mid}</div><div style="font-size:12px;color:var(--t2)">${t.op} · ${t.gd}${t.ms!=="-"?" → "+t.ms:""}</div></div><span class="bg bg-o">${fTm(t.mu)}</span></div></div>`;}).join(""):"";let hist=trk.filter(t=>t.st==="selesai").sort((a,b)=>new Date(b.mu)-new Date(a.mu));if(CU.role==="operator")hist=hist.filter(t=>t.op===CU.nama);$("trkH").innerHTML=hist.length?hist.map(t=>{const u=arm.find(a=>a.id===t.mid);return`<div class="ti"><div class="tm" style="background:var(--gb);color:var(--g)"><i class="fas fa-check"></i></div><div style="flex:1"><div style="font-size:13px;font-weight:700">${u?u.id+" - "+u.mk:t.mid}</div><div style="font-size:11px;color:var(--t3)">${t.op} · ${t.gd}${t.ms!=="-"?" → "+t.ms:""}</div></div><div style="text-align:right"><div style="font-size:11px;color:var(--t2)">${fTm(t.mu)}</div><div style="font-size:10px;color:var(--t3)">${t.se?fTm(t.se):"-"}</div></div></div>`;}).join(""):`<div style="text-align:center;padding:20px;color:var(--t3);font-size:13px">Belum ada riwayat</div>`}
function openTrk(){popIdle("mtM");popG("mtG");popM("mtMe");openM("mTrk")}
async function startTrk(){
  const m=$("mtM").value,g=$("mtG").value,ms=$("mtMe").value;
  if(!m){toast("Pilih motor","er");return}
  if(isB(m)){toast("Motor sedang digunakan","er");return}
  try {
    await apiRequest('/tracks',{method:'POST',body:{vehicle_code:m,building:g,machine:ms}});
    clM("mTrk");
    toast("Pengiriman dimulai","ok");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
async function endTrk(id){
  try {
    await apiRequest(`/tracks/${id}/end`,{method:'POST'});
    toast("Pengiriman selesai","ok");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
function rJad(){$("jadT").innerHTML=`<button class="chip sel" data-jf="all" onclick="fJ('all',this)">Semua</button><button class="chip" data-jf="mendesak" onclick="fJ('mendesak',this)"><i class="fas fa-fire" style="font-size:10px;color:var(--r)"></i> Mendesak</button><button class="chip" data-jf="minggu" onclick="fJ('minggu',this)"><i class="fas fa-clock" style="font-size:10px;color:var(--y)"></i> Minggu Ini</button><button class="chip" data-jf="selesai" onclick="fJ('selesai',this)"><i class="fas fa-check" style="font-size:10px;color:var(--g)"></i> Selesai</button>`;let d=jad.map(j=>({...j,hr:hK(j.tg),unit:arm.find(u=>u.id===j.aid)}));if(jF==="mendesak")d=d.filter(j=>j.st==="menunggu"&&j.hr<=3);else if(jF==="minggu")d=d.filter(j=>j.st==="menunggu"&&j.hr>3&&j.hr<=7);else if(jF==="selesai")d=d.filter(j=>j.st==="selesai");d.sort((a,b)=>{if(a.st==="selesai"&&b.st!=="selesai")return 1;if(a.st!=="selesai"&&b.st==="selesai")return -1;return a.hr-b.hr});const el=$("jadL"),emp=$("jadE");if(!d.length){el.innerHTML="";emp.style.display="block";return}emp.style.display="none";el.innerHTML=d.map(j=>{let pc,pl,pb,pi;if(j.st==="selesai"){pc="var(--g)";pl="Selesai";pb="var(--gb)";pi="fa-check-circle"}else if(j.hr<0){pc="var(--r)";pl="Terlewat";pb="var(--rb)";pi="fa-times-circle"}else if(j.hr===0){pc="var(--r)";pl="Hari Ini";pb="var(--rb)";pi="fa-fire"}else if(j.hr<=3){pc="var(--r)";pl="Dalam "+j.hr+" hari";pb="var(--rb)";pi="fa-exclamation-circle"}else if(j.hr<=7){pc="var(--y)";pl="Dalam "+j.hr+" hari";pb="var(--yb)";pi="fa-clock"}else{pc="var(--t2)";pl="Dalam "+j.hr+" hari";pb="var(--bg)";pi="fa-calendar"}return`<div class="cd" style="margin-bottom:10px"><div style="display:flex;align-items:center;gap:14px"><div style="width:42px;height:42px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:16px;flex-shrink:0;background:${pb};color:${pc}"><i class="fas ${pi}"></i></div><div style="flex:1;min-width:0"><div style="font-size:14px;font-weight:700">${j.unit?j.unit.id+" - "+j.unit.mk:j.aid}</div><div style="font-size:12px;color:var(--t2)">${j.jn} · ${fTg(j.tg)}</div>${j.ct?`<div style="font-size:11px;color:var(--t3);margin-top:2px">${j.ct}</div>`:""}${j.st==="selesai"&&j.cost?`<div style="font-size:11px;font-weight:700;color:var(--g);margin-top:4px"><i class="fas fa-coins"></i> Biaya: ${fRp(j.cost)}</div>`:""}</div><span class="bg" style="background:${pb};color:${pc}">${pl}</span></div>${j.st==="menunggu"&&CU.role!=="operator"?`<div style="display:flex;gap:8px;margin-top:12px"><button class="btn btn-g bsm" style="flex:1" onclick="openSel(${j.id})"><i class="fas fa-check"></i> Selesai</button><button class="brs" onclick="delJad(${j.id})"><i class="fas fa-trash"></i></button></div>`:""}</div>`;}).join("");if(CU.role!=="operator"&&jF==="all")el.innerHTML+=`<button class="btn btn-o" style="margin-top:6px" onclick="openMJ()"><i class="fas fa-plus"></i> Buat Jadwal Baru</button>`}
function fJ(f,b){jF=f;$$("[data-jf]").forEach(x=>x.classList.remove("sel"));b.classList.add("sel");rJad()}
function openMJ(pre){$("mjM").innerHTML=arm.map(u=>{const h=hSk(u);return`<option value="${u.id}" ${u.id===pre?"selected":""}>${u.id} - ${u.mk} (Skor: ${h.sk})</option>`}).join("");$("mjT").value="";$("mjC").value="";if(!pre&&arm.length){const h=hSk(arm[0]),rk=gRk(h.sk);const jS=$("mjJ");for(let o of jS.options)if(o.value===rk){jS.value=rk;break}}$("mjM").onchange=function(){const u=arm.find(a=>a.id===this.value);if(u){const h=hSk(u),rk=gRk(h.sk);const jS=$("mjJ");for(let o of jS.options)if(o.value===rk){jS.value=rk;break}}};openM("mJad")}
async function saveJad(){
  const a=$("mjM").value,j=$("mjJ").value,t=$("mjT").value,c=$("mjC").value.trim();
  if(!t){toast("Pilih tanggal","er");return}
  try {
    await apiRequest('/schedules',{method:'POST',body:{vehicle_code:a,job_type:j,scheduled_at:t,note:c}});
    clM("mJad");
    toast("Jadwal dibuat","ok");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
function openSel(id){sId=id;const j=jad.find(a=>a.id===id),u=arm.find(a=>a.id===j.aid);$("msI").innerHTML=`<div style="font-size:14px;font-weight:700">${u?u.id+" - "+u.mk:j.aid}</div><div style="font-size:12px;color:var(--t2);margin-top:2px">${j.jn} · ${fTg(j.tg)}</div>`;$("msB").value="";$("msK").value="";$("msF").value="";openM("mSel")}
async function konfSel(){
  const j=jad.find(a=>a.id===sId);if(!j)return;
  const b=parseInt($("msB").value)||0,k=$("msK").value.trim();
  if(!b||b<=0){toast("Biaya aktual wajib diisi","er");return}
  const mf=$("msF");
  let photo="";
  if(mf&&mf.files&&mf.files[0]){const fl=mf.files[0];if(fl.size>4*1024*1024){toast("Foto maksimal 4MB","er");return}photo=await new Promise(res=>{const rd=new FileReader();rd.onload=e=>res(e.target.result);rd.readAsDataURL(fl)})}
  try {
    await apiRequest(`/schedules/${sId}/complete`,{method:'POST',body:{cost:b,note:k,photo}});
    clM("mSel");
    toast("Servis selesai! Skor diperbarui.","ok");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
async function delJad(id){
  if(!confirm("Hapus jadwal?"))return;
  try {
    await apiRequest(`/schedules/${id}`,{method:'DELETE'});
    toast("Dihapus","ok");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
function expCSV(){const f=$("rpF").value,t=$("rpTo").value;if(!f||!t){toast("Pilih range tanggal dulu","er");return}let d=aSc();if(rC!=="all")d=d.filter(x=>x.st.lv===rC);d.sort((a,b)=>a.sk-b.sk);const rw=riw.filter(r=>r.tg>=f&&r.tg<=t);const rows=[["Laporan CMMS - PT. Sumber Masanda Jaya"],["Periode",fTg(f)+" s/d "+fTg(t)],[""],["Kode","Kendaraan","Kondisi","Skor","Trip/Hari","Terakhir Servis","Total Biaya","Total Servis"]];d.forEach(u=>rows.push([u.id,u.mk,u.st.l+" ("+u.sk+")",u.tr,u.ls,fRp(u.tb),u.ts]));rows.push([""]);rows.push(["Riwayat Servis"]);rows.push(["Kode","Tanggal","Jenis","Biaya","Keterangan"]);rw.sort((a,b)=>a.tg.localeCompare(b.tg)).forEach(r=>rows.push([r.aid,fTg(r.tg),r.jn,fRp(r.bz),r.kt||""]));const csv=rows.map(r=>r.map(c=>{const s=String(c??"");return s.indexOf(",")>=0||s.indexOf(";")>=0||s.indexOf('"')>=0?'"'+s.replace(/"/g,'""')+'"':s}).join(";")).join("\r\n");const blob=new Blob(["\ufeff"+csv],{type:"text/csv;charset=utf-8"});const a=document.createElement("a");a.href=URL.createObjectURL(blob);a.download="laporan_cmms_"+f+"_"+t+".csv";a.click();URL.revokeObjectURL(a.href);toast("Export Excel berhasil","ok")}
function expPDF(){const f=$("rpF").value,t=$("rpTo").value;if(!f||!t){toast("Pilih range tanggal dulu","er");return}let d=aSc();if(rC!=="all")d=d.filter(x=>x.st.lv===rC);d.sort((a,b)=>a.sk-b.sk);const rw=riw.filter(r=>r.tg>=f&&r.tg<=t);const w=window.open("","_blank");w.document.write(`<html><head><title>Laporan CMMS</title><style>body{font-family:Arial,sans-serif;padding:24px;color:#1a1a1a}h1{font-size:20px;margin:0 0 4px}p{margin:2px 0;font-size:12px;color:#555}table{width:100%;border-collapse:collapse;margin-top:14px;font-size:12px}th,td{border:1px solid #ccc;padding:6px 8px;text-align:left}th{background:#FF6B00;color:#fff}.t2{margin-top:18px;font-size:14px;font-weight:700;color:#D95A00}</style></head><body><h1>Laporan CMMS - PT. Sumber Masanda Jaya</h1><p>Periode: ${fTg(f)} s/d ${fTg(t)}</p><p>Total servis: ${rw.length} · Total biaya: ${fRp(rw.reduce((a,r)=>a+r.bz,0))}</p><div class="t2">Kondisi Armada</div><table><tr><th>Kode</th><th>Kendaraan</th><th>Kondisi</th><th>Skor</th><th>Trip/Hari</th><th>Terakhir Servis</th><th>Total Biaya</th></tr>${d.map(u=>`<tr><td>${u.id}</td><td>${u.mk}</td><td>${u.st.l}</td><td>${u.sk}</td><td>${u.tr}</td><td>${fTg(u.ls)}</td><td>${fRp(u.tb)}</td></tr>`).join("")}</table><div class="t2">Riwayat Servis</div><table><tr><th>Kode</th><th>Tanggal</th><th>Jenis</th><th>Biaya</th><th>Keterangan</th></tr>${rw.sort((a,b)=>a.tg.localeCompare(b.tg)).map(r=>`<tr><td>${r.aid}</td><td>${fTg(r.tg)}</td><td>${r.jn}</td><td>${fRp(r.bz)}</td><td>${r.kt||"-"}</td></tr>`).join("")||"<tr><td colspan=5 style='text-align:center'>Tidak ada data</td></tr>"}</table><script>window.onload=function(){setTimeout(function(){window.print()},300)}<\/script></body></html>`);w.document.close()}
function rLap(){const n=new Date(),m=new Date(n);m.setMonth(m.getMonth()-3);$("rpF").value=m.toISOString().split("T")[0];$("rpTo").value=n.toISOString().split("T")[0];$("rpR").innerHTML="";$("rpA").innerHTML=""}
function tglRC(e){$$("#rpCC .chip").forEach(b=>b.classList.remove("sel"));e.classList.add("sel");rC=e.dataset.c}
function genLap(){const f=$("rpF").value,t=$("rpTo").value;if(!f||!t){toast("Pilih range tanggal","er");return}let d=aSc();if(rC!=="all")d=d.filter(x=>x.st.lv===rC);d.sort((a,b)=>a.sk-b.sk);const rw=riw.filter(r=>r.tg>=f&&r.tg<=t),tb=rw.reduce((a,r)=>a+r.bz,0);$("rpR").innerHTML=`<div class="cd"><div class="ct2">Ringkasan ${fTg(f)} - ${fTg(t)}</div><div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;margin-bottom:14px"><div class="sb"><div class="sn" style="font-size:20px">${rw.length}</div><div class="sl">Total Servis</div></div><div class="sb"><div class="sn" style="font-size:18px">${fRp(tb)}</div><div class="sl">Total Biaya</div></div></div><div style="font-size:13px;font-weight:700;color:var(--t2);margin-bottom:8px">Kondisi Armada (${d.length})</div>${d.map(u=>`<div class="rr"><div style="display:flex;align-items:center;gap:10px"><span style="font-weight:700">${u.id}</span><span class="bg ${u.st.bc}" style="font-size:10px">${u.st.l} (${u.sk})</span></div><span style="font-size:12px;color:var(--t3)">${u.mk}</span></div>`).join("")}</div>`;$("rpA").innerHTML=`<div class="cd"><div class="ct2">Analisis Rule-Based</div><div class="rl" style="border-left-color:var(--g)"><div><div class="rl-if" style="color:var(--g)">IF Skor >= 70 → Perawatan Berkala</div><div class="rl-d">${d.filter(x=>x.st.lv==="sehat").length} unit. Tidak ada tindakan khusus.</div></div></div><div class="rl" style="border-left-color:var(--y)"><div><div class="rl-if" style="color:var(--y)">IF 40 <= Skor < 70 → Servis</div><div class="rl-d">${d.filter(x=>x.st.lv==="perhatian").length} unit perlu perhatian.</div></div></div><div class="rl" style="border-left-color:var(--r)"><div><div class="rl-if" style="color:var(--r)">IF Skor < 40 → Overhaul/Susut</div><div class="rl-d">${d.filter(x=>x.st.lv==="kritis").length} unit kritis.${CU.role==="manager"?" Pertimbangkan penyusutan.":" Koordinasi manager."}</div></div></div></div>`}
function rPrf(){$("prN").textContent=CU.nama;const av=$("prAv");av.innerHTML=CU.photo?`<img src="${CU.photo}" alt="Foto profil" style="width:100%;height:100%;border-radius:50%;object-fit:cover">`:`<i class="fas fa-user" style="color:var(--o);font-size:26px"></i>`;$("prI").innerHTML=`<div class="prw"><span class="prl">Nama</span><span class="prv">${CU.nama}</span></div><div class="prw"><span class="prl">Username</span><span class="prv">${CU.username}</span></div><button class="btn btn-o bsm" style="width:100%;margin-top:12px" onclick="openPrfM()"><i class="fas fa-user-edit"></i> Edit Profil</button>`;const ma=$("prM"),la=$("prL");if(CU.role==="manager"){ma.style.display="block";ma.innerHTML=`<div style="font-size:13px;font-weight:700;color:var(--t2);margin-bottom:10px">Menu Manager</div><div class="qg" style="grid-template-columns:1fr"><div class="qa" onclick="navTo('penyusutan')"><div class="qi" style="color:var(--r)"><i class="fas fa-trash-alt"></i></div><div class="ql">Rekomendasi Penyusutan</div><div class="qs">Cek armada yang perlu diganti</div></div><div class="qa" onclick="navTo('analisis')"><div class="qi" style="color:var(--b)"><i class="fas fa-brain"></i></div><div class="ql">Analisis Rule-Based</div><div class="qs">Detail logika IF-THEN</div></div><div class="qa" onclick="navTo('users')"><div class="qi" style="color:var(--o)"><i class="fas fa-users"></i></div><div class="ql">Kelola Pengguna</div><div class="qs">Semua level akun</div></div><div class="qa" onclick="navTo('suku')"><div class="qi" style="color:var(--y)"><i class="fas fa-boxes"></i></div><div class="ql">Suku Cadang</div><div class="qs">Stok spare part</div></div><div class="qa" onclick="navTo('aktivitas')"><div class="qi" style="color:var(--b)"><i class="fas fa-history"></i></div><div class="ql">Riwayat Aktivitas</div><div class="qs">Log pengguna</div></div><div class="qa" onclick="openLok('gedung')"><div class="qi" style="color:var(--o)"><i class="fas fa-building"></i></div><div class="ql">Kelola Gedung</div><div class="qs">${ged.length} gedung terdaftar</div></div><div class="qa" onclick="openLok('mesin')"><div class="qi" style="color:var(--y)"><i class="fas fa-cogs"></i></div><div class="ql">Kelola Mesin</div><div class="qs">${mes.length} mesin terdaftar</div></div></div>`;}else ma.style.display="none";if(CU.role==="leader"){la.style.display="block";la.innerHTML=`<div style="font-size:13px;font-weight:700;color:var(--t2);margin-bottom:10px">Menu Leader</div><div class="qg" style="grid-template-columns:1fr"><div class="qa" onclick="navTo('users')"><div class="qi" style="color:var(--y)"><i class="fas fa-users"></i></div><div class="ql">Kelola Pengguna</div><div class="qs">Tambah/hapus pengguna</div></div><div class="qa" onclick="openLok('gedung')"><div class="qi" style="color:var(--o)"><i class="fas fa-building"></i></div><div class="ql">Kelola Gedung</div><div class="qs">${ged.length} gedung</div></div><div class="qa" onclick="openLok('mesin')"><div class="qi" style="color:var(--y)"><i class="fas fa-cogs"></i></div><div class="ql">Kelola Mesin</div><div class="qs">${mes.length} mesin</div></div><div class="qa" onclick="navTo('laporan')"><div class="qi" style="color:var(--g)"><i class="fas fa-chart-bar"></i></div><div class="ql">Laporan</div><div class="qs">Analisis & riwayat</div></div></div>`;}else la.style.display="none"}
function showRiw(id){const rw=riw.filter(r=>r.aid===id).sort((a,b)=>new Date(b.tg)-new Date(a.tg));$("riwC").innerHTML=rw.length?rw.map(r=>`<div class="ri"><div class="rd"></div><div style="flex:1;min-width:0"><div style="font-size:13px;font-weight:700">${r.jn==='Aplikasi Suku Cadang'?'<i class="fas fa-tools" style="color:var(--o)"></i> ':''}${r.jn}</div><div style="font-size:11px;color:var(--t3)">${fTg(r.tg)}${r.kt?" · "+r.kt:""}</div></div><div style="font-size:13px;font-weight:700">${fRp(r.bz)}</div></div>`).join(""):'<div style="text-align:center;padding:20px;color:var(--t3);font-size:13px">Belum ada riwayat</div>';navTo("riwayat")}
function rSus(){const d=arm.map(u=>{const s=cSu(u);return{...u,...s}}).sort((a,b)=>(b.ds?1:0)-(a.ds?1:0)||a.pc-b.pc);$("susC").innerHTML=d.map(u=>{if(u.ds)return`<div class="ru"><div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:8px"><div style="font-size:14px;font-weight:800">${u.id} - ${u.mk}</div><span class="bg bg-r">SUSUT</span></div><div style="font-size:12px;color:var(--t2);margin-bottom:4px">${u.np||""} · Usia ${u.us} tahun · Skor ${u.sk}</div><div style="font-size:11px;color:var(--r);margin-bottom:6px">Alasan: ${u.al.join("; ")}</div><div style="font-size:12px;font-weight:700">Biaya: ${fRp(u.tb)} (${u.pc}% harga baru ${fRp(HB)})</div></div>`;return`<div class="ru-ok"><div style="display:flex;justify-content:space-between;align-items:center"><div><div style="font-size:14px;font-weight:700">${u.id} - ${u.mk}</div><div style="font-size:11px;color:var(--t2);margin-top:2px">Usia ${u.us}thn · Skor ${u.sk} · Biaya ${u.pc}%</div></div><span class="bg bg-g">Layak</span></div></div>`}).join("")}
function rAna(){const all=aSc(),se=all.filter(a=>a.st.lv==="sehat"),pe=all.filter(a=>a.st.lv==="perhatian"),kr=all.filter(a=>a.st.lv==="kritis");const rules=[{c:"Skor >= 70",a:"Perawatan Berkala",d:"Servis rutin 3 bulanan.",cl:"var(--g)",u:se},{c:"55 <= Skor < 70",a:"Servis Ringan",d:"Ganti oli, filter 1-2 minggu.",cl:"var(--o)",u:pe.filter(x=>x.sk>=55)},{c:"40 <= Skor < 55",a:"Servis Berat",d:"Overhaul 3-5 hari. Batasi trip.",cl:"var(--y)",u:pe.filter(x=>x.sk<55)},{c:"Skor < 40",a:"Overhaul / Ganti Komponen",d:"HENTIKAN penggunaan.",cl:"var(--r)",u:kr}];$("anC").innerHTML=rules.map(r=>`<div class="rl" style="border-left-color:${r.cl}"><div><div class="rl-if" style="color:${r.cl}">IF ${r.c}</div><div class="rl-then">THEN ${r.a}</div><div class="rl-d">${r.d}</div><div style="margin-top:6px;font-size:11px;color:var(--t3)">${r.u.length} unit: ${r.u.map(x=>x.id).join(", ")||"-"}</div></div></div>`).join("")+`<div class="cd"><div style="font-size:12px;font-weight:700;color:var(--t2);margin-bottom:8px">RUMUS SKOR AKHIR</div><div style="font-size:13px;line-height:1.8"><strong>Skor</strong> = (Skor Trip × 35%) + (Skor Usia × 25%) + (Skor Riwayat × 40%) - Pengurangan Terlambat<br><span style="font-size:11px;color:var(--t3)">Pengurangan: -0.3 poin/hari setelah 90 hari tanpa servis</span></div><div style="margin-top:12px;padding:12px;background:var(--bg);border-radius:10px;font-size:11px;color:var(--t2);line-height:1.6"><strong>Distribusi Bobot:</strong><br>Trip/Hari (35%) — intensitas penggunaan<br>Usia (25%) — selisih tahun dari pembelian<br>Riwayat (40%) — rata-rata jumlah servis & total biaya</div></div></div>`}
function rUsr(){const show=CU.role==="manager"?users:users.filter(u=>u.role==="operator");const rb={manager:["bg-o","Manager"],leader:["bg-y","Leader"],operator:["bg-b","Operator"]};$("usrL").innerHTML=show.length?`<div class="cd" style="margin-bottom:0">`+show.map(u=>{const rr=rb[u.role]||["bg-b",u.role];return`<div class="uc">${u.photo?`<img src="${u.photo}" alt="${u.nama}" style="width:40px;height:40px;border-radius:50%;object-fit:cover;flex-shrink:0">`:`<div class="ua" style="background:var(--o)">${u.nama[0]}</div>`}<div style="flex:1"><div style="font-size:14px;font-weight:700">${u.nama}</div><div style="font-size:11px;color:var(--t3)">@${u.username}</div></div><span class="bg ${rr[0]}" style="font-size:10px">${rr[1]}</span>${u.id!==CU.id?`<button class="brs" style="margin-left:8px" onclick="delUsr(${u.id})"><i class="fas fa-trash"></i></button>`:""}</div>`}).join("")+`</div>`:`<div class="cd" style="text-align:center;padding:20px;color:var(--t3);font-size:13px">Belum ada pengguna</div>`}
function openUsrM(){const sel=$("muR");sel.innerHTML="";const opts=CU.role==="manager"?[["operator","Operator"],["leader","Leader"],["manager","Manager"]]:[["operator","Operator"]];sel.innerHTML=opts.map(o=>`<option value="${o[0]}">${o[1]}</option>`).join("");$("mUsrT").textContent=CU.role==="manager"?"Tambah Pengguna":"Tambah Operator";openM("mUser")}
let mpData=null;
function mpChg(inp){const f=inp.files&&inp.files[0];if(!f)return;if(!f.type.startsWith("image/")){toast("File harus berupa gambar","er");return}if(f.size>3*1024*1024){toast("Ukuran foto maksimal 3MB","er");return}const r=new FileReader();r.onload=e=>{mpData=e.target.result;$("mpAv").innerHTML=`<img src="${mpData}" alt="Foto profil" style="width:100%;height:100%;border-radius:50%;object-fit:cover">`};r.readAsDataURL(f)}
function openPrfM(){const u=CU;mpData=null;$("mpF").value="";$("mpN").value=u.nama;$("mpC").value="";$("mpP").value="";$("mpP2").value="";$("mpAv").innerHTML=u.photo?`<img src="${u.photo}" alt="Foto profil" style="width:100%;height:100%;border-radius:50%;object-fit:cover">`:`<i class="fas fa-camera" style="color:var(--o);font-size:22px"></i>`;openM("mPrf")}
async function savePrf(){
  const n=$("mpN").value.trim(),c=$("mpC").value,p=$("mpP").value,p2=$("mpP2").value;
  if(!n){toast("Nama wajib diisi","er");return}
  if(p!==p2){toast("Konfirmasi password baru tidak cocok","er");return}
  const body={name:n};
  if(mpData)body.photo=mpData;
  if(p){if(!c){toast("Masukkan password saat ini","er");return}body.current_password=c;body.password=p}
  try {
    const res=await apiRequest('/profile',{method:'PUT',body});
    if(res&&res.user)CU=res.user;
    clM("mPrf");
    toast("Profil diperbarui","ok");
    rPrf();
  } catch(e){toast(e.message,'er')}
}
async function addUsr(){
  const n=$("muN").value.trim(),u=$("muU").value.trim(),p=$("muP").value.trim();
  if(!n||!u||!p){toast("Semua field wajib diisi","er");return}
  if(users.find(x=>x.username.toLowerCase()===u.toLowerCase())){toast("Username sudah ada","er");return}
  try {
    const res=await apiRequest('/users',{method:'POST',body:{name:n,username:u,password:p,role:$("muR").value}});
    if(res&&res.user) users.push(res.user);
    $("muN").value="";
    $("muU").value="";
    $("muP").value="";
    clM("mUser");
    toast("Pengguna ditambahkan","ok");
    rUsr();
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
async function delUsr(id){
  if(!confirm("Hapus pengguna ini?"))return;
  try {
    await apiRequest(`/users/${id}`,{method:'DELETE'});
    users=users.filter(x=>x.id!==id);
    toast("Dihapus","ok");
    rUsr();
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
function openLok(type){lokT=type;navTo("lokasi")}
function rLok(){const list=locations.filter(item=>item.type===lokT);const title=lokT==="gedung"?"Gedung Tujuan":"Mesin Produksi";const icon=lokT==="gedung"?"fa-building":"fa-cogs";const color=lokT==="gedung"?"var(--o)":"var(--y)";const capT=lokT==="gedung"?"Tambah Gedung":"Tambah Mesin";$("lokC").innerHTML=`<div class="cd"><div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:14px"><div class="ct2" style="margin:0">${title} (${list.length})</div><button class="btn btn-o bsm" onclick="openLokM()"><i class="fas fa-plus"></i> ${capT}</button></div>${list.length?list.map(item=>`<div class="lok-row"><div style="display:flex;align-items:center;gap:10px"><div class="lok-icon" style="background:${color}18"><i class="fas ${icon}" style="color:${color};font-size:14px"></i></div><span style="font-size:14px;font-weight:600">${item.name}</span></div><button class="bxs" style="background:var(--rb);color:var(--r)" onclick="delLok(${item.id})"><i class="fas fa-trash"></i></button></div>`).join(""):'<div style="text-align:center;padding:20px;color:var(--t3);font-size:13px">Belum ada data</div>'}</div>`}
function openLokM(){$("lokT").textContent=lokT==="gedung"?"Tambah Gedung":"Tambah Mesin";$("lokL").textContent=lokT==="gedung"?"Nama Gedung":"Nama Mesin";$("lokI").value="";$("lokI").placeholder=lokT==="gedung"?"Gedung D":"Mesin D";openM("mLok")}
async function saveLok(){const v=$("lokI").value.trim();if(!v){toast("Masukkan nama","er");return}const type=lokT;try{const res=await apiRequest('/locations',{method:'POST',body:{name:v,type:type}});locations.push(res.location);ged = locations.filter(item=>item.type==='gedung').map(item=>item.name);mes = locations.filter(item=>item.type==='mesin').map(item=>item.name);clM("mLok");toast("Berhasil ditambahkan","ok");rLok();}catch(e){toast(e.message,'er')}}
async function delLok(id){if(!confirm("Hapus lokasi?"))return;try{await apiRequest(`/locations/${id}`,{method:'DELETE'});locations = locations.filter(item=>item.id!==id);ged = locations.filter(item=>item.type==='gedung').map(item=>item.name);mes = locations.filter(item=>item.type==='mesin').map(item=>item.name);toast("Dihapus","ok");rLok();}catch(e){toast(e.message,'er')}}
function openMA(){$("maE").value="";$("maT").textContent="Tambah Armada";$("maI").value="";$("maI").readOnly=false;$("maM").value="";$("maTr").value="";$("maN").value="";$("maS").value="";const ts=$("maY");ts.innerHTML="";for(let y=CY;y>=CY-15;y--)ts.innerHTML+=`<option value="${y}">${y}</option>`;ts.value=CY-2;openM("mArm")}
function editArm(id){const u=arm.find(a=>a.id===id);if(!u)return;$("maE").value=id;$("maT").textContent="Edit Armada";$("maI").value=u.id;$("maI").readOnly=true;$("maM").value=u.mk;$("maTr").value=u.tr;$("maN").value=u.np||"";$("maS").value=u.ls;const ts=$("maY");ts.innerHTML="";for(let y=CY;y>=CY-15;y--)ts.innerHTML+=`<option value="${y}">${y}</option>`;ts.value=u.th;openM("mArm")}
async function saveArm(){
  const eid=$("maE").value,id=$("maI").value.trim(),mk=$("maM").value.trim(),th=parseInt($("maY").value),tr=parseInt($("maTr").value)||0,np=$("maN").value.trim(),sv=$("maS").value;
  if(!id||!mk){toast("ID dan Merk wajib diisi","er");return}
  if(!sv){toast("Tanggal servis wajib","er");return}
  try {
    if(eid){
      await apiRequest(`/vehicles/${eid}`,{method:'PUT',body:{name:mk,year:th,trips_per_day:tr,last_service_date:sv,plate:np}});
      toast("Diperbarui","ok");
    } else {
      await apiRequest('/vehicles',{method:'POST',body:{code:id,name:mk,year:th,trips_per_day:tr,last_service_date:sv,plate:np}});
      toast("Ditambahkan","ok");
    }
    clM("mArm");
    await loadData(true);
  } catch(e){toast(e.message,'er')}
}
async function delArm(id){
  if(!confirm("Hapus armada "+id+"?"))return;
  try {
    await apiRequest(`/vehicles/${id}`,{method:'DELETE'});
    toast("Dihapus","ok");
    await loadData(true);
    goBack();
  } catch(e){toast(e.message,'er')}
}
function openSukM(id){$("sukE").value=id||"";if(id){const p=parts.find(x=>x.id===id);$("sukN").value=p.name;$("sukQ").value=p.qty;$("sukMn").value=p.min_qty;$("sukU").value=p.unit;$("sukP").value=p.price;$("sukNt").value=p.note||"";$("sukT").textContent="Edit Suku Cadang"}else{$("sukN").value="";$("sukQ").value=0;$("sukMn").value=5;$("sukU").value="pcs";$("sukP").value=0;$("sukNt").value="";$("sukT").textContent="Tambah Suku Cadang"}openM("mSuk")}
async function saveSuk(){const eid=$("sukE").value,nm=$("sukN").value.trim(),q=parseInt($("sukQ").value)||0,mn=parseInt($("sukMn").value)||0,un=$("sukU").value.trim()||"pcs",pr=parseInt($("sukP").value)||0,nt=$("sukNt").value.trim();if(!nm){toast("Nama wajib diisi","er");return}if(pr<0){toast("Harga tidak boleh negatif","er");return}try{if(eid){await apiRequest(`/parts/${eid}`,{method:'PUT',body:{name:nm,qty:q,min_qty:mn,unit:un,price:pr,note:nt}});toast("Suku cadang diperbarui","ok")}else{await apiRequest('/parts',{method:'POST',body:{name:nm,qty:q,min_qty:mn,unit:un,price:pr,note:nt}});toast("Suku cadang ditambahkan","ok")}clM("mSuk");await loadData(true);}catch(e){toast(e.message,'er')}}
async function delSuk(id){if(!confirm("Hapus suku cadang?"))return;try{await apiRequest(`/parts/${id}`,{method:'DELETE'});toast("Dihapus","ok");await loadData(true);}catch(e){toast(e.message,'er')}}
let pkId=null;
function openPk(id){const p=parts.find(x=>x.id===id);if(!p)return;pkId=id;$("pkI").innerHTML=`<div style="font-size:14px;font-weight:700">${p.name}</div><div style="font-size:12px;color:var(--t2);margin-top:2px">Stok: ${p.qty} ${p.unit} - ${fRp(p.price||0)}/satuan</div>`;$("pkV").innerHTML=arm.map(u=>`<option value="${u.id}">${u.id} - ${u.mk}</option>`).join("");$("pkQ").value=1;openM("mPk")}
async function savePk(){const v=$("pkV").value,q=parseInt($("pkQ").value)||0;if(!v){toast("Pilih motor","er");return}if(q<1){toast("Jumlah minimal 1","er");return}try{await apiRequest(`/parts/${pkId}/use`,{method:'POST',body:{vehicle_code:v,qty:q}});clM("mPk");toast("Suku cadang dipakai","ok");await loadData(true);}catch(e){toast(e.message,'er')}}
function rSuk(){const low=parts.filter(p=>p.qty<=p.min_qty);$("sukC").innerHTML=low.length?`<div class="ug" style="margin-bottom:14px"><i class="fas fa-exclamation-triangle"></i><div class="ut"><strong>${low.length} item stok menipis</strong> — segera isi ulang</div></div>`:"";$("sukC").innerHTML+=parts.length?`<div class="cd" style="margin-bottom:0">`+parts.map(p=>{const st=p.qty<=0?"bg-r":p.qty<=p.min_qty?"bg-y":"bg-g";const lb=p.qty<=0?"Habis":p.qty<=p.min_qty?"Menipis":"Aman";const c=p.qty<=p.min_qty?"var(--r)":"var(--g)";const bg=p.qty<=p.min_qty?"var(--rb)":"var(--gb)";return`<div class="suk"><div class="tm" style="background:${bg};color:${c}"><i class="fas fa-box"></i></div><div style="flex:1;min-width:0"><div style="font-size:14px;font-weight:700">${p.name}</div><div style="font-size:11px;color:var(--t3)">${p.qty} ${p.unit}${p.note?" · "+p.note:""}</div>${p.price?`<div style="font-size:11px;color:var(--o);font-weight:700;margin-top:2px">${fRp(p.price)}</div>`:""}</div><span class="bg ${st}" style="font-size:10px">${lb}</span><div style="display:flex;gap:6px;margin-left:8px"><button class="bxs" style="background:var(--os);color:var(--o)" onclick="openPk(${p.id})" title="Pakai"><i class="fas fa-wrench"></i></button><button class="bxs" style="background:var(--bb);color:var(--b)" onclick="openSukM(${p.id})"><i class="fas fa-edit"></i></button><button class="bxs" style="background:var(--rb);color:var(--r)" onclick="delSuk(${p.id})"><i class="fas fa-trash"></i></button></div></div>`}).join("")+`</div>`:`<div class="cd" style="text-align:center;padding:30px;color:var(--t3);font-size:13px"><i class="fas fa-box-open" style="font-size:32px;display:block;margin-bottom:10px;color:var(--bd)"></i>Belum ada suku cadang</div>`}
function rAkt(){const el=$("aktC");if(!logs.length){el.innerHTML='<div class="cd" style="text-align:center;padding:30px;color:var(--t3);font-size:13px">Belum ada aktivitas</div>';return}const ic={login:"fa-sign-in-alt",logout:"fa-sign-out-alt","lapor kondisi":"fa-exclamation-circle","tambah user":"fa-user-plus","hapus user":"fa-user-minus","tambah armada":"fa-plus-circle","ubah armada":"fa-edit","hapus armada":"fa-trash","tambah lokasi":"fa-building","hapus lokasi":"fa-trash-alt","buat jadwal":"fa-calendar-plus","selesaikan servis":"fa-check-circle","hapus jadwal":"fa-calendar-minus","mulai tracking":"fa-play","selesai tracking":"fa-flag-checkered","tambah suku cadang":"fa-box","ubah suku cadang":"fa-edit","hapus suku cadang":"fa-box-open"};el.innerHTML=`<div class="cd" style="margin-bottom:0">`+logs.map(l=>`<div class="akt"><div class="tm" style="background:var(--os);color:var(--o)"><i class="fas ${ic[l.action]||"fa-history"}"></i></div><div style="flex:1;min-width:0"><div style="font-size:13px;font-weight:700">${l.username} <span style="font-weight:600;color:var(--t2)">${l.action}</span></div>${l.details?`<div style="font-size:11px;color:var(--t3);margin-top:2px">${l.details}</div>`:""}<div style="font-size:10px;color:var(--t3);margin-top:3px">${fTg(l.created_at)} ${fTm(l.created_at)}</div></div></div>`).join("")+`</div>`}
function remList(){return jad.filter(j=>j.st==="menunggu").map(j=>({...j,hr:hK(j.tg)})).filter(j=>j.hr<=3).sort((a,b)=>a.hr-b.hr).slice(0,3).map(j=>({st:"jad",id:j.aid,jn:j.jn,hr:j.hr,u:arm.find(x=>x.id===j.aid)}))}
function renderRem(a){if(!a.length)return '<div class="cd"><div class="ct2"><i class="fas fa-bell" style="color:var(--o)"></i> Reminder Servis</div><div style="text-align:center;padding:22px 20px;color:var(--t3);font-size:13px"><i class="fas fa-calendar-check" style="font-size:30px;display:block;margin-bottom:10px;color:var(--bd)"></i>Tidak ada jadwal perbaikan</div></div>';const canGo=CU&&CU.role!=="operator";return '<div class="cd"><div class="ct2"><i class="fas fa-bell" style="color:var(--o)"></i> Reminder Servis</div>'+a.map(r=>{const u=r.u||{},b=r.hr<0||r.st==="ov",col=b?"var(--r)":"var(--y)",bg=b?"var(--rb)":"var(--yb)",bgc=b?"bg-r":"bg-y",lbl=r.st==="ov"?"Terlambat":r.hr<0?"Terlewat":r.hr===0?"Hari ini":r.hr<=3?"Segera":"Aman",sub=r.st==="ov"?"Terlambat "+Math.max(0,-r.hr-90)+" hari":r.hr<0?"Terlewat "+(-r.hr)+" hari":r.hr===0?"Hari ini":"Dalam "+r.hr+" hari",ic=r.st==="ov"?"fa-wrench":"fa-calendar-day";return '<div class="rem"'+(canGo?' style="cursor:pointer" onclick="navTo(\'jadwal\')"':'')+'><div class="rem-i" style="background:'+bg+';color:'+col+'"><i class="fas '+ic+'"></i></div><div style="flex:1;min-width:0"><div style="font-size:13px;font-weight:700">'+(u.id||r.id)+(r.jn?" · "+r.jn:"")+'</div><div style="font-size:11px;color:var(--t3)">'+sub+'</div></div><span class="bg '+bgc+'" style="font-size:10px">'+lbl+'</span>'+(canGo?'<i class="fas fa-chevron-right" style="color:var(--t3);font-size:11px;margin-left:6px"></i>':'')+'</div>'}).join("")+'</div>'}
function openM(id){$(id).classList.add("sh")}
function clM(id){$(id).classList.remove("sh")}
 $$(".mb").forEach(bg=>{bg.addEventListener("click",function(e){if(e.target===this)this.classList.remove("sh")})});
function toast(msg,type){const w=$("toastW"),t=document.createElement("div");t.className="to to-"+type;t.innerHTML=`<i class="fas ${type==="ok"?"fa-check-circle":"fa-times-circle"}"></i> ${msg}`;w.appendChild(t);setTimeout(()=>{t.style.opacity="0";t.style.transform="translateY(-16px)";t.style.transition="all .3s";setTimeout(()=>t.remove(),300)},2500)}
</script>
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/service-worker.js').catch(() => {});
  });
}

window.addEventListener('DOMContentLoaded', () => {
  loadData();
});
</script>
</body>
</html>
