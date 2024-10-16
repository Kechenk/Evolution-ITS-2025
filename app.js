import * as THREE from 'three';

const camera = new THREE.PerspectiveCamera(
    100, // adjusted field of view for better viewing
    window.innerWidth / window.innerHeight,
    0.1,
    1000
);
camera.position.z = 5; // adjusted camera position for better viewing
camera.lookAt(new THREE.Vector3(0, 0, 0)); // Ensure camera is facing the correct direction

const scene = new THREE.Scene();
let astro;
const loader = new GLTFLoader();
loader.load('/astronaut_helmet.glb',
    function (gltf) {
        astro = gltf.scene;
        scene.add(astro);
        astro.scale.set(0.5, 0.5, 0.5); // adjust model scale if needed
    },
    function (xhr) {
        console.log((xhr.loaded / xhr.total) * 100 + '% loaded');
    },
    function (error) {
        console.error('Error loading model:', error);
    }
);

const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true }); // added antialiasing for better rendering
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById('container3D').appendChild(renderer.domElement);

// Light
const ambientLight = new THREE.AmbientLight(0xffffff, 1.3);
scene.add(ambientLight); // Add light to the scene

const reRender3D = () => {
    requestAnimationFrame(reRender3D);
    renderer.render(scene, camera);
}
reRender3D();