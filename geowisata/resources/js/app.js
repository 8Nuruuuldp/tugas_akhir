import './bootstrap';


//jangan dulu dihapus takut perlu diubah filter nya ke list
map.on("click", function (e) {
            const {
                latitude,
                longitude
            } = e.latlng
            Marker.setLatLng([latitude, longitude]);
            clearResults();
        });
        let typingInterval
        // typing handler
        function onTyping(e) {
            clearTimeout(this.typingTimer);
            this.typingTimer = setTimeout(() => {
                const keyword = e.value;
                const kategori = kategoriSelect.value;
                searchLocation(keyword, kategori);
            }, 500);
        }
        //elemen input dan select
        const searchInput = document.getElementById('searchInput');
        const kategoriSelect = document.getElementById('kategoriSelect');

        searchInput.addEventListener('input', function () {
            const keyword = this.value;
            const kategori = kategoriSelect.value;
            searchLocation(keyword, kategori);
        });

        function onCategoryChange() {
            const keyword = searchInput.value;
            const kategori = kategoriSelect.value;
            searchLocation(keyword, kategori);
        }
        // search handler
        function searchLocation(keyword, kategori) {
            if (keyword || kategori) {
                fetch(`/search?keyword=${encodeURIComponent(keyword)}&kategori=${encodeURIComponent(kategori)}`)
                    .then(response => response.json())
                    .then(json => {
                        console.log("json", json);
                        if (json.length > 0) {
                            renderResults(json);
                        } else {
                            clearResults();
                            alert("Lokasi tidak ditemukan");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("Terjadi kesalahan saat mencari lokasi");
                    });
            } else {
                clearResults();
            }
        }
        // render results
        function renderResults(result) {
            const resultsWrapperHTML = document.getElementById("search-result");
            let resultsHTML = "";
            result.forEach(n => {
                resultsHTML +=
                    `<li><i class="bi bi-geo-alt"></i> <a href="#" onclick="setLocation(${n.latitude},${n.longitude}); return false;">${n.nama_tempat}, ${n.alamat}</a></li>`
            });
            resultsWrapperHTML.innerHTML = resultsHTML;
        }
        let Marker = L.marker([0, 0]);

        function setLocation(latitude, longitude) {
            map.setView(new L.LatLng(latitude, longitude), 25);
                Marker.setLatLng([latitude, longitude]);
            clearResults();
        }
        // clear results
        function clearResults() {
            const resultsWrapperHTML = document.getElementById("search-result");
            resultsWrapperHTML.innerHTML = "";
        }
