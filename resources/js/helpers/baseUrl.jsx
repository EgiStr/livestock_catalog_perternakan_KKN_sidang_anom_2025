const baseUrl = "https://sindanganom.com/storage/";

export default baseUrl;
export function getBaseUrl(url) {
    const baseuri = import.meta.env.VITE_APP_URL_IMAGE || baseUrl;
    return baseuri + url;
}
