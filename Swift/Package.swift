// swift-tools-version:5.7
import PackageDescription

let package = Package(
    name: "Pulcher",
    products: [
        .executable(name: "Pulcher", targets: ["Pulcher"])
    ],
    targets: [
        .executableTarget(name: "Pulcher")
    ]
)
