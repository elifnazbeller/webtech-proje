async function fetchArtistInfo() {
    const artistName = document.getElementById('artistName').value;
    const apiKey = 'b6704eb36f2fe1b7d18b958d091f2fe7'; // Buraya kendi Last.fm API anahtarınızı ekleyin
    const url = `https://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist=${encodeURIComponent(artistName)}&api_key=${apiKey}&format=json`;

    try {
        const response = await fetch(url);
        const data = await response.json();

        if (data.error) {
            document.getElementById('artistInfo').innerHTML = `<p>Sanatçı bulunamadı: ${data.message}</p>`;
        } else {
            const artist = data.artist;
            const imageUrl = artist.image.find(img => img.size === 'large')['#text'];

            document.getElementById('artistInfo').innerHTML = `
                <h2>${artist.name}</h2>
                <img src="${imageUrl}" alt="${artist.name}">
                <p><strong>Dinleyici Sayısı:</strong> ${artist.stats.listeners}</p>
                <p><strong>Oynatılma Sayısı:</strong> ${artist.stats.playcount}</p>
                <p>${artist.bio.summary}</p>
                <p><a href="${artist.url}" target="_blank">Daha fazla bilgi</a></p>
            `;
        }
    } catch (error) {
        console.error('Veri çekilirken hata oluştu:', error);
        document.getElementById('artistInfo').innerHTML = `<p>Bilgi alınırken bir hata oluştu. Lütfen tekrar deneyin.</p>`;
    }
}
